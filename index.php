<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head id="head">
        <title>CIRCO | Deputado Federal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/styles.css" />
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
    </head>
    <body id="corpo">
        <img src="images/loader.gif" class="loader" alt="loading" />
        <form name="form1">
            <div id="page-wrap">

                <img src="images/palhaco_brasil.jpg" alt="palhaco" id="pic" width="300" />

                <div id="contact-info" class="vcard">

                    <h1 class="fn">Circo</h1>

                    <p class="paragrafo">
                        <span>Componentes:</span><br />
                        <a class="email" href="https://github.com/antoniojunior87/" target="_blank">Antonio Fonseca</a><br />
                        <a class="email" href="https://github.com/brunomsc/" target="_blank">Bruno Magalhães</a><br />
                        <a class="email" href="https://github.com/israelbsr/" target="_blank">Israel Ramos</a><br />
                        <a class="email" href="https://github.com/joelamalio/" target="_blank">Joel Amálio</a><br />
                    </p>
                </div>

                <div id="objective">
                    <p class="paragrafo">
                        Projeto da matéria Aplicações Web com Ajax e Web 2.0 no curso Componentes Distribuídos Web da Pós-Graduação da Faculdade Ruy Barbosa.
                    </p>
                </div>

                <div class="clear"></div>

                <dl>
                    <dd class="clear"></dd>

                    <dt>Estado</dt>
                    <dd>
                        <select id="estado" name="estado" onchange="carregarComboDeputadosPorEstado(this.value, deputado)">
                            <option value="0">Selecione...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RG">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </dd>

                    <dd class="clear"></dd>

                    <dt>Deputado</dt>
                    <dd>
                        <select id="deputado" name="deputado" onchange="obtemInformacoesDeputado(this.value, detalhe, presenca, noticias, twitter)">
                            <option value="0">Selecione...</option>
                        </select>
                    </dd>

                    <dd class="clear"></dd>

                    <dt>Detalhe</dt>
                    <dd>
                        <div id="detalhe" name="detalhe"></div>
                    </dd>

                    <dd class="clear"></dd>
                    
                    <dt>Presença</dt>
                    <dd>
                        <div id="presenca" name="presenca"></div>
                    </dd>

                    <dd class="clear"></dd>
                    
                    <dt>Noticias</dt>
                    <dd>
                        <div id="noticias" name="noticias"></div>
                    </dd> 

                    <dd class="clear"></dd>
                    
                    <dt>Twitter</dt>
                    <dd>
                        <div id="twitter" name="twitter"></div>
                    </dd> 

                    <dd class="clear"></dd>
                    
                    <dt>Projetos</dt>
                    <dd>
                        <div id="projetos" name="projetos"></div>
                    </dd>

                    <dd class="clear"></dd>

                </dl>

                <div class="clear"></div>

            </div>
        </form>
    </body>
</html>
