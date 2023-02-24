<style type="text/css">
    /*Configurações Padrões*/
    ul.menu,
    .menu li,
    .menu a {
        margin: 0;
        padding: 0;
        list-style: none;
        
    }
    .menu a:visited {
        text-decoration: underline;       
    }
  

    ul.menu ul {
        position: absolute;
        display: none;
        box-shadow: 2px 2px 2px #333;
    }
    /*==================================================
    /* Configurações nivel 0*/
    ul.menu {
        float: left;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 14px;
        border-radius: 5px;
        padding: 0 5px;
    }

    .menu li {
        float: left;
        width: auto;
        position: relative;
    }

    .menu li a {
        display: block;
        padding: 0 20px;
        line-height: 45px;
        height: 45px;
        float: right;
        transition: all 0.1s linear;
    }
        
  
    /*======================================================
    /* Configurações nivel FORNECEDOR2*/
    .menu li:hover>ul.submenu-1 {
        display: block;
        top: 45px;
        left: 0;
        padding: 5px;
        width: 110px;
        border-radius: 0 0 5px 5px;
    }

    .menu ul.submenu-1 a {
        width: 100px;
        padding: 0 10px;
        border-radius: 5px;
    }
    /*=============================================
    /* Configurações nivel 2*/
    .menu li:hover>ul.submenu2 {
        display: block;
        top: 45px;
        left: 0;
        padding: 5px;
        width: 110px;
        border-radius: 0 0 5px 5px;
    }

    .menu ul.submenu2 a {
        width: 100px;
        padding: 0 10px;
        border-radius: 5px;
    }

    /* Configurações nivel 3*/
    .menu li:hover>ul.submenu-3 {
        display: block;
        top: 0;
        left: 105px;
        padding: 5px;
        width: 90px;
        border-radius: 0 5px 5px 5px;
    }

    .menu ul.submenu-3 a {
        width: 105px;
        padding: 0 10px;
        border-radius: 5px;
    }


    /*Configurações de cores*/

    /*nivel 1*/
    .menu {
        background: #49a09d;
       
    }

    .menu a {
        color: #000;
        
    }

    .menu li:hover>a {
        background: #2d6462;
        color: #F5FFFA;
    }

    /*nivel 2*/
    .submenu-1 {
        background: #49a09d;
    }

    .submenu-1 a {
        color: #F5FFFA;
    }

    .submenu-1 li:hover>a {
        background: #2d6462;
    }
    .submenu-2 {
        background: #333;
    }

    .submenu-2 a {
        color: #ADFF2F;
    }

    .submenu-2 li:hover>a {
        background: #000;
    }

     .submenu-3 {
        background: #333;
    }

    .submenu-3 a {
        color: #ADFF2F;
    }

    .submenu-3 li:hover>a {
        background: #000;
    }
</style>

<nav>
<ul class="menu">
    <!-- Esse é o 1 nivel ou o nivel principal -->
    <li><a href="#">DASHBOARD</a></li>
    <li><a href="#">FORNECEDOR</a>
        <ul class="submenu-1">
            <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">CADASTRO</a></li>
            <li><a href="#">BUSCA</a></li>
        </ul>
    </li>
    <li><a href="#">PRODUTO</a></li>
         <ul class="submenu2">
            <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="#">CADASTRO2</a></li>
            <li><a href="#">BUSCA2</a></li>
        </ul>
    <li><a href="#">TERMO</a></li>
    <li><a href="#">RESPONSAVEL</a></li>
    <li><a href="#">COLABORADOR</a></li>
    


</ul>
</nav>
