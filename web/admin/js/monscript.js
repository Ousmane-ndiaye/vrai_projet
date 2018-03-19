$(document).ready(function() {
    /* $("#liste_reservation").DataTable({
        language: {
            processing: "Traitement en cours...",
            search: "Rechercher&nbsp;:",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix: "",
            loadingRecords: "Chargement en cours...",
            zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable: "Aucune donnée disponible dans le tableau",
            paginate: {
                first: "Premier",
                previous: "Pr&eacute;c&eacute;dent",
                next: "Suivant",
                last: "Dernier"
            },
            aria: {
                sortAscending: ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    }); */
    $("#menu_nav").children().each(function() {
        $(this).on("click", function() {
            console.log('------------------------------------');
            console.log($(this).attr("class"));
            console.log('------------------------------------');
        })
    });

    function champObl(champs) {
        if (champs.val() == "" || champs.val().length <= 2 || champs.val().trim().length <= 2) {
            return "Veuillez remplir le champ " + champs.data('champ');
        } else if (champs.data('champ') == "nom d'utilisateur" && !champs.val().match(/^[a-zA-Z0-9]+$/i)) {
            return "Veillez rentrer un nom d'utilisateur valide";
        } else {
            return "";
        }
    }

    function clickSurValider() {
        var param = "idReservation=" + $(this).data("idreservation") + "&idClient=" + $(this).data("idclient") + "&idBien=" + $(this).data("idbien");
        $("#charge_page").load("contrat #charge_contrat", param, function() {
            $("#btn_valider_reserve").on("click", function() {
                clickSurValider();
            });

            $("#btn_annuler_reserve").on("click", function() {
                $("#charge_page").load("reservation #charge_reservation", function() {
                    $(".voir_detail").each(function() {
                        $(this).on("click", function() {
                            clickSurVoir($(this));
                        });
                    });
                });
            });
        });
    }

    function clickSurVoir(bouton) {
        var param = "idReservation=" + bouton.data("idreservation") + "&idClient=" + bouton.data("idclient") + "&idBien=" + bouton.data("idbien");
        $("#charge_page").load("detail #charge_detail", param, function() {
            $("#btn_valider_reserve").on("click", function() {
                var param = "idReservation=" + $(this).data("idreservation") + "&idClient=" + $(this).data("idclient") + "&idBien=" + $(this).data("idbien");
                $("#charge_page").load("contrat #charge_contrat", param, function() {
                    $("#content_general").hide();
                    $(".soumContrat").each(function() {
                        $("#pushContrat").hide();
                        $(this).on("change", function() {
                            if ($(this).val() == "accepter") {
                                $("#pushContrat").show();
                                $("#pushContrat").on("click", function() {
                                    var param = "idReservation=" + $(this).data("idreservation") + "&idClient=" + $(this).data("idclient") + "&idBien=" + $(this).data("idbien") + "&requete=valider_la_reservation" + "&montant=" + $(this).data("montant");
                                    $.ajax({
                                        type: "POST",
                                        url: "requete_ajax",
                                        dataType: "text",
                                        data: param,
                                        success: function(reponse) {
                                            $("#content_general").show();
                                            printJS('content_general', 'html');
                                            $("#content_general").hide();
                                            return false;
                                            $("#charge_page").load("bien #charge_bien", function() {
                                                $(".voir_detail").each(function() {
                                                    $(this).on("click", function() {
                                                        clickSurVoir($(this));
                                                    });
                                                });
                                            });
                                        },
                                        error: function() {
                                            console.log("requête non executé !");
                                        }
                                    });
                                    return false;
                                })
                            } else {
                                $("#pushContrat").hide();
                            }
                        })
                    })
                });
            });

            $("#btn_annuler_reserve").on("click", function() {
                $("#charge_page").load("reservation #charge_reservation", function() {
                    $(".voir_detail").each(function() {
                        $(this).on("click", function() {
                            clickSurVoir($(this));
                        });
                    });
                });
            });
        });
    }

    $(".cacher").each(function() {
        $(this).hide();
    });

    $("form").each(function() {
        var formType = $(this).data("form");
        var idAlert = formType;
        $(this).on("submit", function() {
            $('#' + idAlert + ' ul').children("li").remove();
            valid = true;
            var donnees = $(this).serialize();
            c = 0;
            $(this).children("fieldset").each(function() {
                $(this).children("div").each(function() {
                    $(this).children("input[type='text'], input[type='password'], input[type='number'], input[type='email']").each(function() {
                        if (champObl($(this)) == "") {
                            c++;
                            $('#' + idAlert).hide();
                        } else {
                            li = "<li>" + champObl($(this)) + "</li>";
                            $('#' + idAlert).show();
                            $('#' + idAlert + ' ul').append(li);
                        }
                    });
                });
            });
            if (c == 7 && formType == "form_inscription") {
                valid = true;
            } else if (c == 2 && formType == "form_connexion") {
                valid = true;
                /* console.log('------------------------------------');
                console.log(donnees);
                console.log('------------------------------------');
                $.ajax({
                    type: "POST",
                    url: "{{ path('test_ajax') }}",
                    dataType: "json",
                    data: donnees,
                    success: function(reponse) {
                        console.log('------------------------------------');
                        console.log(reponse);
                        console.log('------------------------------------');
                    },
                    error: function() {
                        console.log("requête non executé !");
                    }
                }) */
            } else if (c == 2 && formType == "form_recuperation") {
                valid = true;
            } else if (c < 4 && formType == "form_recherche") {
                valid = true;
            } else {
                valid = false;
            }
            return valid;
        });
    });

    $(".voir_detail").each(function() {
        $(this).on("click", function() {
            clickSurVoir($(this));
        });
    });
});