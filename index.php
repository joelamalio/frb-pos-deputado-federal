<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head id="head">
        <title>Kraken | Deputado Federal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="css/styles.css" />
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript">
            function carregarDeputados(elemento) {
                document.getElementById("deputado").options.length = 0;
                var estado = elemento.options[elemento.selectedIndex].value;
                if(estado == 0) return;
                var query = '../deputado/deputado/Dep_Lista.asp?Legislatura=54&Partido=QQ&SX=QQ&Todos=None&condic=QQ&forma=lista&UF=';
                //                var query = '../deputado/deputados.html?UF=';

                var ajax = new XMLHttpRequest();
                ajax.open('GET', query + encodeURIComponent(estado), true);
                ajax.onreadystatechange = function() {
                    if(ajax.readyState == 4) {
                        var deputados = $(ajax.responseText).find("#content");
                        var lista = deputados.find("ul li a");
                        lista.each(function (i) {
                            var nome = $(lista[i]).find("b");
                            if(nome[0] != undefined ) {
                                var deputado = nome[0].textContent;
                                var option = document.createElement("option");
                                option.text = deputado;
                                option.value = lista[i].getAttribute("href");
                                var select = document.getElementById("deputado");
                                select.appendChild(option);
                            }
                        });
                    }
                };
                ajax.send(null);
            }
            function carregarProjetos(codigoDeputado) {
                var query = '../deputado/sileg/Prop_lista.asp?Limite=N&Autor=' + codigoDeputado;

                var ajax = new XMLHttpRequest();
                ajax.open('GET', query, true);
                ajax.onreadystatechange = function() {
                    if(ajax.readyState == 4) {
                        var divProjetos = document.getElementById("projetos");
                        divProjetos.innerHTML = "";

                        var tabela = document.createElement("table");
                        var projetos = $(ajax.responseText).find("tbody.coresAlternadas");
                        var linha = "";
                        projetos.each(function(i) {
                            linha += $(projetos[i]).html();
                        });
                        tabela.innerHTML = linha;
                        divProjetos.appendChild(tabela);
                    }
                };
                ajax.send(null);
            }
            function carregarInformacoes(elemento) {

                var deputado = elemento.options[elemento.selectedIndex].value;
                //                var deputado = "detalhes.html";
                var query = '../deputado/deputado/' + deputado;
                // sileg/Prop_lista.asp?Limite=N&Autor=530020
                var codigoDeputado = deputado.substring(deputado.indexOf("=")+1, deputado.length);

                
                var ajax = new XMLHttpRequest();
                ajax.open('GET', query, true);
                ajax.onreadystatechange = function() {
                    if(ajax.readyState == 4) {
                        var divDetalhe = document.getElementById("detalhe");
                        divDetalhe.innerHTML = "";
                        var tabela = document.createElement("table");
                        var img = document.createElement("img");
                        var imagem = $(ajax.responseText).find("img.image-left");
                        img.src = imagem[0].src;
                        divDetalhe.appendChild(img);

                        var detalhe = $(ajax.responseText).find("ul.visualNoMarker");
                        var controle = false;
                        detalhe.each(function(i) {
                            if (controle == true) {return false};

                            var linha = $(detalhe[i]).find("li");
                            //                            linha.each(function(j) {
                            for(var j = 0; j < linha.length; j++) {

                                    
                                var tr = document.createElement("tr");
                                var td = document.createElement("td");
                                var conteudo = linha[j].textContent;
                                if (conteudo == "Biografia ") {
                                    divDetalhe.appendChild(tabela);
                                    j = linha.length;
                                    controle = true;
                                    break;
                                }
                                td.innerHTML = conteudo;
                                tr.appendChild(td);
                                tabela.appendChild(tr);
                            }//);
                        });
                        divDetalhe.appendChild(tabela);
                    }
                };
                ajax.send(null);
                carregarProjetos(codigoDeputado);

            }
        </script>
    </head>
    <body id="corpo"> 
        <form name="form1">
            <div id="page-wrap">

                <img src="images/kraken.png" alt="kraken" id="pic" />

                <div id="contact-info" class="vcard">

                    <h1 class="fn">Kraken</h1>

                    <p>
                        <span>Componentes:</span><br />
                        <a class="email" href="https://github.com/antoniojunior87/" target="_blank">Antonio Fonseca</a><br />
                        <a class="email" href="https://github.com/brunomsc/" target="_blank">Bruno Magalhães</a><br />
                        <a class="email" href="https://github.com/israelbsr/" target="_blank">Israel Ramos</a><br />
                        <a class="email" href="https://github.com/joelamalio/" target="_blank">Joel Amálio</a><br />
                    </p>
                </div>

                <div id="objective">
                    <p>
                        Projeto da matéria Aplicações Web com Ajax e Web 2.0 no curso Componentes Distribuídos Web da Pós-Graduação da Faculdade Ruy Barbosa.
                    </p>
                </div>

                <div class="clear"></div>

                <dl>
                    <dd class="clear"></dd>

                    <dt>Estado</dt>
                    <dd>
                        <select id="estado" name="estado" onchange="carregarDeputados(this)">
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
                        <select id="deputado" name="deputado" onchange="carregarInformacoes(this)">
                            <option value="0">Selecione...</option>
                        </select>
                    </dd>

                    <dd class="clear"></dd>

                    <dt>Detalhe</dt>
                    <dd>
                        <div id="detalhe" name="detalhe"></div>
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
