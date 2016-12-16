@extends('layouts.app')

@section('content')
    <link href="css/hal-utama.css" rel="stylesheet">


    <form id="formPrincipal" name="formPrincipal" method="post" action="http://www.transparencia.pr.gov.br/pte/home?windowId=267" accept-charset="ISO-8859-1" enctype="application/x-www-form-urlencoded">
        <section id="page-inicio" class="page" style="height: 687px;">
            <div id="formPrincipal:j_idt37" class="bg-cover-fade"><img id="formPrincipal:j_idt38" src="http://www.transparencia.pr.gov.br/pte/resources/images/bg-cover-1.jpg?pfdrid_c=true" alt="" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 4; opacity: 0.964502; width: 1920px; height: 601px;"><img id="formPrincipal:j_idt39" src="http://www.transparencia.pr.gov.br/pte/resources/images/bg-cover-2.jpg?pfdrid_c=true" alt="" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 5; opacity: 0.0354983; width: 1920px; height: 601px;"><img id="formPrincipal:j_idt40" src="http://www.transparencia.pr.gov.br/pte/resources/images/bg-cover-3.jpg?pfdrid_c=true" alt="" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 1920px; height: 601px;"><img id="formPrincipal:j_idt41" src="http://www.transparencia.pr.gov.br/pte/resources/images/bg-cover-4.jpg?pfdrid_c=true" alt="" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 1920px; height: 601px;"></div>
            <div id="conteudo-inicio" class="container-fluid">
                <div class="container-menu-principal">
                    <div class="caixa-icones">
                        <p id="explicacao2"> </p>
                        <ul id="list-icones">
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-orcamento.png" alt="PLANEJAMENTO E ORÇAMENTO" class="icone-tema">
                                    <span>PLANEJAMENTO E ORÇAMENTO</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/2/25?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Plano Plurianual
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/2/52?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Diretrizes Orçamentárias e Orçamento Anual
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/2/14?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Execução Orçamentária
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/2/6?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Normas Orçamentárias
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/2/24?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Normas Contábeis
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-receitas.png" alt="RECEITAS" class="icone-tema">
                                    <span>RECEITAS</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/3/3?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Consulta Livre
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/3/27?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Receita Tributária Arrecadada
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/3/21?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Consulta por Fonte de Recurso
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/3/4?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Gráfico da Evolução da Receita
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-despesas.png" alt="DESPESAS" class="icone-tema">
                                    <span>DESPESAS</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/22?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Consulta Livre
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/28?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Consulta por Credor
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/30?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Pagamentos Efetuados
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/49?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Dívida Pública
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/13?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Repasses e Transferências
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/50?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Informações Adicionais
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/4/29?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Gráfico Receita x Despesa
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-pessoal.png" alt="PESSOAL" class="icone-tema">
                                    <span>PESSOAL</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/6/1?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Remuneração - Servidores Poder Executivo
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/6/2?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Viagens
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/6/35?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Concursos Públicos e Testes Seletivos
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/6/34?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Tabelas Salariais e Carreiras
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/6/45?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Relação Nominal (Art. 234 - CE)
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-compras.png" alt="COMPRAS" class="icone-tema">
                                    <span>COMPRAS</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/5/9?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Situação Cadastral de Fornecedores
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/5/10?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Processos Licitatórios
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/5/8?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Contratos Firmados
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/5/11?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Prestação de Contas ao TCE
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-convenios-transparencias.png" alt="RESPONSABILIDADE FISCAL" class="icone-tema">
                                    <span>RESPONSABILIDADE FISCAL</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/7/36?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Demonstrativos da LRF (RREO e RGF)
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/7/53?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Audiências Públicas Fazendárias
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/7/54?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Demonstrativos Contábeis
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/7/37?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Informações Adicionais
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-legislacao.png" alt="LEGISLAÇÃO" class="icone-tema">
                                    <span>LEGISLAÇÃO</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/1/20?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Legislação Estadual
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/1/38?origem=3" class="ui-link ui-widget link-menu" target="_blank">
                                            <i class="fa fa-arrow-right"></i>  Diários Oficiais
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/1/46?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Legislação de Acesso à Informação
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/1/55?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Legislação Fazendária
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item-icone">
                                <a href="#" class="icone dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.transparencia.pr.gov.br/pte/resources/images/icon-tema-informacoes-gerais.png" alt="INFORMAÇÕES GERAIS" class="icone-tema">
                                    <span>INFORMAÇÕES GERAIS</span>
                                </a>
                                <div class="arrow-tema-icones"></div>
                                <ul class="submenu dropdown-menu" role="menu">
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/8/18?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Estrutura Organizacional
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/8/17?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Cadastro de Autoridades
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/8/41?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Patrimônio
                                        </a>
                                    </li>
                                    <li>
                                        <ul class="submenu dropdown-menu" role="menu">
                                        </ul>
                                        <a href="http://www.transparencia.pr.gov.br/pte/assunto/8/48?origem=3" class="ui-link ui-widget link-menu" target="_self">
                                            <i class="fa fa-arrow-right"></i>  Transparência em outras esferas de Governo
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </form>


@endsection
