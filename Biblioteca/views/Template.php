<?php

class Template
{
    function header()
    {
        echo "<head>
                <meta charset=\"UTF-8\">
                <title>Biblioteca Informa</title>
                <link rel=\"stylesheet\" href=\"../assets/css/bootstrap.min.css\">
                <link rel=\"stylesheet\" href=\"../assets/css/bootstrap-grid.min.css\">
                <link rel=\"stylesheet\" href=\"../assets/css/bootstrap-reboot.min.css\">
            </head>
            
             ".$this->menu()."
        
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" style=\"width: 1300px;margin-left: auto;margin-right: auto;margin-top: 10px\"\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"../images/banner-titulo.png\" alt=\"First slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"../images/banner-convergente.png\" alt=\"Second slide\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-100\" src=\"../images/banner-livros.png\" alt=\"Third slide\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>";
    }

    function menu()
    {
        echo "<div style=\"width: 1300px;margin-left: auto;margin-right: auto; margin-top: 10px\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"height: 70px;\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            
                <div class=\"collapse navbar-collapse justify-content-around\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav navbar-collapse justify-content-around\">                        
                        <li class=\"nav-item\">
                            <a class=\"nav-item\" href=\"index.php\">Home</a>
                        </li>
                        
                        
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-item dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Acervo
                            </a>                            
                        
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"control?ac=aulaTeorcaAluno\">Digital</a>
                                <a class=\"dropdown-item\" href=\"control?ac=aulaPraticaAluno\">Físico</a>
                            </div>                     
                        </li> 
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-item\" href=\"cadastro.php\">Cadastre-se</a>
                        </li>           
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-item\" href=\"#\">Contato</a>
                        </li>
                        
                    </ul>
                </div>
                
                <form action='#' method='post' class='form-inline'>
                    <input type='text' class='form-control' name='login' placeholder='Login'\>
                    <input type='password' class='form-control' name='senha' placeholder='Senha'\>
                    <input type='submit' value='Logar' class='btn btn-primary'>
                </form>
                    
                </nav>
            </div>";
    }

    function footer()
    {
        echo "<div style=\"width: 1300px;margin-left: auto;margin-right: auto; margin-top: 10px\">
                <footer class=\"page-footer font-small blue\">
                    <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
                        <a href=\"https://github.com/adrianowerpel\" target='_blank'> Adriano Werpel Silva</a>
                    </div>
                </footer>
            </div>
            
            <script src=\"../assets/js/jquery.js\"></script>
    <script src=\"../assets/js/bootstrap.min.js\"></script>
    <script src=\"../assets/js/bootstrap.bundle.min.js\"></script>";

    }
}