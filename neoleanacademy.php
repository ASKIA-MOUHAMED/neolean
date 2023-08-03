<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>NEOLEAN</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/tooplate-waso-strategy.css" rel="stylesheet">

        <link rel="icon" href="images/favicon_neolean.png" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="neoleanacademy.css">
       
        <style>
            .style1{
                font-family: 'Montserrat SemiBold';
            }
        </style>
        
    </head>
<body>

    <nav class="navbar navbar-expand-lg bg-white shadow-lg">
        <div class="container">

            <a href="neoleanacademy.html" class="navbar-brand"><img src="images/neoleanacademy.svg" alt="" width="150" height="90"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="onglet click-scroll" href="#section_1"><small class="small-title"><strong class="text-warning"></strong></small> QUI SOMMES-NOUS ?</a>
                    </li>

                    <li class="nav-item">
                        <a class="onglet click-scroll" href="#section_2"><small class="small-title"><strong class="text-warning"></strong></small> NOS FORMATIONS</a>
                    </li>

                    <li class="nav-item">
                        <a class="onglet click-scroll" href="#section_3"><small class="small-title"><strong class="text-warning"></strong></small> NOS PARTENAIRES</a>
                    </li>

                    <li class="nav-item">
                        <a class="onglet click-scroll" href="#section_4"><small class="small-title"><strong class="text-warning"></strong></small> CONTACTS</a>
                    </li>
                </ul>
                <button class=" btnsinscrire ms-4">S'inscrire</button>
            <div>
                    
        </div>
    </nav>

     <div class="section2" id="section_1">
        <div class="container">
            <h6 class="text1">BIENVENUE À L'ÉCOLE SUPÉRIEURE QUI REPOUSSE <br>
            LES LIMITES DE LA FORMATION INNOVANTE !</h6>
          <h2 class="text2">
            NEOLEAN ACADEMY<br />
          </h2>
          <a href="#section_2" class="btnformation mt-4">Nos Formations</a>
        </div>
      </div>
      <div class="section3 mb-5">
        <div class="container">
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-md-5 text-start d-none d-md-block">
                 <div>
                    <h3 class="sect3text">Avec des certifications </h3>
                    <h3 class="sect3text"> internationales reconnues</h3>
                     <h3 class="sect3text">à la clé,</h3>
                 </div>
                 <div>
                    <h6 class="sect3text2">Rejoignez Neolean Academy, et faites partie d'une communauté ambitieuse </h6>
                    <h6 class="sect3text2"> et engagée. </h6>
                 </div>
                 <div>
                    <button class="mt-2 btnvoirplus">Voir Plus</button>
                 </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-content">
                      <h2 class="pb-3 newsletter">S'inscrire à notre <br> newsletter</h2>
                      <form action="">
                          <input type="text" class="form-control mb-3" placeholder="Nom Complet">
                          <input type="text" class="form-control mb-3" placeholder="Email">
                          <input type="email" class="form-control mb-3" placeholder="Téléphone">
                      
                          <!-- L'élément <select> avec des options -->
                          <select class="form-control mb-3">
                              <option value="" selected disabled >Choisir le cours</option>
                              <option value="option1">Intelligence Artificielle</option>
                              <option value="option2">Data Engineer</option>
                              <option value="option3">Data Analyst</option>
                          </select>
                      
                          <div class="d-grid">
                              <button type="submit" class="btn btnenvoyer">Envoyer</button>
                          </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 text-start d-block d-md-none mt-4">
                    <div>
                       <h3 class="sect3text">Avec des certifications </h3>
                       <h3 class="sect3text"> internationales reconnues</h3>
                        <h3 class="sect3text">à la clé,</h3>
                    </div>
                    <div>
                       <h6 class="sect3text2">Rejoignez Neolean Academy, et faites partie d'une communauté ambitieuse </h6>
                       <h6 class="sect3text2"> et engagée. </h6>
                    </div>
                    <div>
                       <button class="mt-2 btnvoirplus">Voir Plus</button>
                    </div>
                   </div>
              </div>
        </div>
      </div>
      <div class="section4" id="section_2">
        <div class="barre"></div>
        <div class="sectformation">
            <div class="h2 text-center py-5">Nos formations</div>
         <div class="container pb-5">
            <div class="row d-flex">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card" id="myBtn" onclick="openModal(1)">
                        <div class="card-content">
                            <img src="images/ia.svg" alt="Newsletter Image" class="bordurebas">
                        </div>
                        <h3 class="text-center titre1">Intelligence Artificielle</h3>
                        <h5 class="text-center titre2">Lorem ipsum dolor sit amet consuibusdam, cupiditate!</h5>
                        <div class="d-flex justify-content-center">
                            <button class="btnvoirplus mt-3">Voir Plus</button>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card formobile" id="myBtn2" onclick="openModal(2)">
                        <div class="card-content">
                            <img src="images/dataengineer.png" alt="Newsletter Image" class="bordurebas">
                        </div>
                        <h3 class="text-center titre1">Data Engineer</h3>
                        <h5 class="text-center titre2">Lorem ipsum dolor sit amet consuibusdam, cupiditate!</h5>
                        <div class="d-flex justify-content-center">
                            <button class="btnvoirplus mt-3">Voir Plus</button>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card formobile" id="myBtn3" onclick="openModal(3)">
                        <div class="card-content">
                            <img src="images/dataanalyst.png" alt="Newsletter Image" class="bordurebas">
                        </div>
                        <h3 class="text-center titre1">Data Analyst</h3>
                        <h5 class="text-center titre2">Lorem ipsum dolor sit amet consuibusdam, cupiditate!</h5>
                        <div class="d-flex justify-content-center">
                            <button class="btnvoirplus mt-3">Voir Plus</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
         </div>
        </div>
      </div>
      <div class="section5" id="section_3">
        <div class="h2 text-center py-5">Nos partenaires</div>
        <div class="container">
            <div class="row pb-5 d-flex">
                     <section class="customer-logos slider">
                        <div class="slide">
                            <img src="images/pmn.svg"  width="100" height="100">
                        </div>
                        
                        <div class="slide">
                          <img src="images/fitec.svg" width="100" height="100">
                        </div>
                        <div class="slide">
                          <img src="images/certyjob.svg"  width="100" height="100">
                        </div>
                     </section>
           
            </div>
        </div>
      </div>
      <div class="sectioncontact pb-5" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <h2 class="contact pb-4">Contactez-nous</h2>
                    <form action="contact.php" id="contact-form" method="post">
                        <input type="text" name="nom" class="form-control mb-3" placeholder="Nom Complet">
                        <input type="text" name="email" class="form-control mb-3" placeholder="E-mail">
                        <textarea name="message" id="" cols="30" rows="10" class="form-control mb-3" placeholder="Message" style="max-height:150px ;"></textarea>
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <button type="submit" class="btn btnenvoyer">Envoyer</button>
                            </div>
                            <div class="col" id="response-message" style="font-size: 14px;"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="localisation">
                                    
                        <div class="contact-info bg-white shadow-lg">
                            <h5 class="mb-4">Siège Sénégal: Neolean, Lot 419 vers le Phare Mamelles, Dakar</h4>

                            <h5 class="mb-2">
                                <a href="tel: 240-480-9600" class="contactstyle">
                                    <i class="bi-telephone contact-icon me-2"></i>
                                    +221 77 171 58 58
                                </a>
                            </h5>

                            <h5>
                                <a href="mailto:info@company.com" class="footer-link contactstyle">
                                    <i class="bi-envelope-fill contact-icon me-2"></i>
                                    inscription@neolean.digital
                                </a>
                            </h5>
                            
                            <!-- Copy "embed a map" HTML code from any point on Google Maps -> Share Link  -->
                            
                            <iframe class="google-map mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.836848922369!2d-17.438058685158992!3d14.665198589761411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17374406be63b%3A0x2b9389def0ec134d!2sNeolean!5e0!3m2!1sfr!2ssn!4v1670415654806!5m2!1sfr!2ssn" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
      
 <!-- Intelligence Artificielle -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="row d-flex align-items-center py-4">
            <div class="col-md-8">
                <h3 class="partie1">Vous souhaitez vous former, être certifié(e) <br>
                    et opérationnel(le) en tant que Intelligence Artificielle ?</h3>
                
                <h5 class="partie2">Nous sommes là pour proposer à nos entreprises partenaires des talents comme <br>
                    les vôtres ! Pour intégrer le Mastère <span class="style1">Intelligence Artificielle</span>, vous êtes aujourd’hui :</h5>
                    
                <ul class="partie3">
                    <li class="liste"><img src="images/liste.svg" alt=""> Titulaire d’un diplôme Bac+3 validé (minimum) en école d’informatique</li>
                    <li class="liste"><img src="images/liste.svg" alt=""> Rigoureux, créatif, vous avez un sens aigu du service client</li>
                    <li class="liste"><img src="images/liste.svg" alt=""> Vous êtes mobile, dynamique et capable de vous adapter rapidement</li>
                    <li class="liste"><img src="images/liste.svg" alt=""> Vous avez des compétences dans le domaine de l’analyse de données <br>(R, Matlab…), la modélisation de données.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="partie2 mb-3">Cette formation conduisant à de réelles opportunités 
                    professionnelles s’adresse à des étudiants et
                    jeunes diplômés.</h5>
                
                <div>
                    <form action="">
                        <input type="text" name="email" placeholder="Saisir votre e-mail" class="form-control">
                        <button class="btntelechargerplaquette mt-3"><i class="fa-solid fa-file-pdf icone"></i> Télécharger la plaquette</button>
                    </form>
                </div>
            </div>
        </div>
        
      
    </div>
</div>

<!-- Data Engineer -->
<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal2()">&times;</span>
        <div class="row d-flex align-items-center py-4">
            <div class="col-md-8">
                <h3 class="partie1">Vous souhaitez vous former, être certifié(e) <br>
                    et opérationnel(le) en tant que Data Engineer ?</h3>
                
                <h5 class="partie2">Nous sommes là pour proposer à nos entreprises partenaires des talents comme <br>
                    les vôtres ! Pour intégrer le Mastère <span class="style1">Data Engineer</span>, vous êtes aujourd’hui :</h5>
                    
                <ul class="partie3">
                    <li class="liste"><img src="images/liste.svg" alt=""> Titulaire d’un diplôme Bac+3 validé (minimum) en école d’informatique</li>
                    <li class="liste"><img src="images/liste.svg" alt=""> Rigoureux, créatif, vous avez un sens aigu du service client</li>
                    <li class="liste"><img src="images/liste.svg" alt=""> Vous êtes mobile, dynamique et capable de vous adapter rapidement</li>
                    <li class="liste"><img src="images/liste.svg" alt=""> Vous avez des compétences dans le domaine de l’analyse de données <br>(R, Matlab…), la modélisation de données.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="partie2 mb-3">Cette formation conduisant à de réelles opportunités 
                    professionnelles s’adresse à des étudiants et
                    jeunes diplômés.</h5>
                
                <div>
                    <form action="">
                        <input type="text" name="email" placeholder="Saisir votre e-mail" class="form-control">
                        <button class="btntelechargerplaquette mt-3"><i class="fa-solid fa-file-pdf icone"></i> Télécharger la plaquette</button>
                    </form>
                </div>
            </div>
        </div>
      
    </div>
</div>

<!-- Data Analyst -->
<div id="myModal3" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal3()">&times;</span>
        
            <div class="row d-flex align-items-center py-4">
                <div class="col-md-8">
                    <h3 class="partie1">Vous souhaitez vous former, être certifié(e) <br>
                        et opérationnel(le) en tant que Data Analyst ?</h3>
                    
                    <h5 class="partie2">Nous sommes là pour proposer à nos entreprises partenaires des talents comme <br>
                        les vôtres ! Pour intégrer le Mastère <span class="style1">Data Analyst</span>, vous êtes aujourd’hui :</h5>
                        
                    <ul class="partie3">
                        <li class="liste"><img src="images/liste.svg" alt=""> Titulaire d’un diplôme Bac+3 validé (minimum) en école d’informatique</li>
                        <li class="liste"><img src="images/liste.svg" alt=""> Rigoureux, créatif, vous avez un sens aigu du service client</li>
                        <li class="liste"><img src="images/liste.svg" alt=""> Vous êtes mobile, dynamique et capable de vous adapter rapidement</li>
                        <li class="liste"><img src="images/liste.svg" alt=""> Vous avez des compétences dans le domaine de l’analyse de données <br>(R, Matlab…), la modélisation de données.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="partie2 mb-3">Cette formation conduisant à de réelles opportunités 
                        professionnelles s’adresse à des étudiants et
                        jeunes diplômés.</h5>
                    
                    <div>
                        <form action="">
                            <input type="text" name="email" placeholder="Saisir votre e-mail" class="form-control">
                            <button class="btntelechargerplaquette mt-3"><i class="fa-solid fa-file-pdf icone"></i> Télécharger la plaquette</button>
                        </form>
                    </div>
                </div>
            </div>  
    </div>
</div>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
      $(document).ready(function () {
        $(".customer-logos").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 4
                }
            },
            {
                breakpoint: 520,
                settings: {
                slidesToShow: 3
                }
            }
            ]
        });
        });
    </script>
<script>
    function openModal(modalNumber) {
        var modal;
        if (modalNumber === 1) {
            modal = document.getElementById("myModal");
        } else if (modalNumber === 2) {
            modal = document.getElementById("myModal2");
        } else if (modalNumber === 3) {
            modal = document.getElementById("myModal3");
        }
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    function closeModal2() {
        var modal = document.getElementById("myModal2");
        modal.style.display = "none";
    }

    function closeModal3() {
        var modal = document.getElementById("myModal3");
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        var modal2 = document.getElementById("myModal2");
        var modal3 = document.getElementById("myModal3");
        if (event.target === modal) {
            modal.style.display = "none";
        }
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
        if (event.target === modal3) {
            modal3.style.display = "none";
        }
    };
</script>
<script>
    // Intercepter la soumission du formulaire avec JavaScript
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher le rechargement de la page
        var form = event.target;

        // Envoyer les données du formulaire à la page PHP via AJAX
        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var responseMessage = document.getElementById("response-message");
                    if (response.success) {
                        responseMessage.textContent = response.message;
                    } else {
                        responseMessage.textContent = "Erreur lors du traitement du formulaire.";
                    }
                } else {
                    console.error("Une erreur s'est produite lors de la requête AJAX.");
                }
            }
        };
        xhr.send(new FormData(form));
    });
</script>






    
    
</body>
</html>
