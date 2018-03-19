$(document).ready(function() {
    function champObl(champs) {
        if (champs.val() == "") {
            return "Veuillez remplir le champ " + champs.data('champ');
        } else if (champs.data('champ') == "nom d'utilisateur" && !champs.val().match(/^[a-zA-Z0-9]+$/i)) {
            return "Veillez rentrer un nom d'utilisateur valide";
        } else {
            return "";
        }
    }

    function clickSousBiens() {
        $(".lesSousBien").each(function() {
            $(this).on("click", function() {
                var idForm = $(this).attr("id");
                $("#charge_page").load("biens_sousbiens #charge_biens_sousbiens", function() {
                    $('.form-soubiens, .message').hide();
                    if (idForm == 'villeDesBiens') {
                        $("#formVilleDesBiens").show();
                        $("#formQuartierDesBiens").hide();
                        $("#formTypeBienDesBiens").hide();
                    }
                    if (idForm == 'quartierDesBiens') {
                        $("#formVilleDesBiens").hide();
                        $("#formQuartierDesBiens").show();
                        $("#formTypeBienDesBiens").hide();
                    }
                    if (idForm == 'typeBienDesBiens') {
                        $("#formVilleDesBiens").hide();
                        $("#formQuartierDesBiens").hide();
                        $("#formTypeBienDesBiens").show();
                    }
                    $("form").each(function() {
                        var formType = $(this).data("form");
                        var idAlert = formType;
                        $(this).on("submit", function() {
                            $('#' + idAlert + ' ul').children("li").remove();
                            var donnees = $(this).serialize();
                            c = 0;
                            $(this).children("div").each(function() {
                                $(this).children("input[type='text'], input[type='password'], input[type='number'], input[type='email'], select").each(function() {
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
                            if (c == 2 && formType == "formquartier") {
                                $.ajax({
                                    type: "POST",
                                    url: "biens_sousbiens",
                                    dataType: "text",
                                    data: donnees + "requete=inserer_quartier",
                                    success: function(reponse) {
                                        console.log('------------------------------------');
                                        console.log(reponse);
                                        console.log('------------------------------------');
                                    },
                                    error: function() {
                                        console.log("requête non executé !");
                                    }
                                });
                            } else if (c == 2 && formType == "formville") {
                                $.ajax({
                                    type: "POST",
                                    url: "biens_sousbiens",
                                    dataType: "text",
                                    data: donnees + "requete=inserer_ville",
                                    success: function(reponse) {
                                        console.log('------------------------------------');
                                        console.log(reponse);
                                        console.log('------------------------------------');
                                    },
                                    error: function() {
                                        console.log("requête non executé !");
                                    }
                                });
                            } else if (c < 4 && formType == "formtype") {
                                $.ajax({
                                    type: "POST",
                                    url: "biens_sousbiens",
                                    dataType: "text",
                                    data: donnees + "requete=inserer_type",
                                    success: function(reponse) {
                                        console.log('------------------------------------');
                                        console.log(reponse);
                                        console.log('------------------------------------');
                                    },
                                    error: function() {
                                        console.log("requête non executé !");
                                    }
                                });
                            } else {
                                valid = false;
                            }
                            return false;
                        });
                    });

                });
                return false;
            });
        });
    }

    clickSousBiens();
});