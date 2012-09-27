<html>
    <head id="head">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajax</title>
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript">
            function carregarDeputados(elemento) {
                document.getElementById("deputado").options.length = 0;
                var estado = elemento.options[elemento.selectedIndex].value;
                if(estado == 0) return;
                var query = '../deputado/Dep_Lista.asp?Legislatura=54&Partido=QQ&SX=QQ&Todos=None&condic=QQ&forma=lista&UF=';
                var ajax = new XMLHttpRequest();
                ajax.open('GET', query + encodeURIComponent(estado), true);
                ajax.onreadystatechange = function() {
                    if(ajax.readyState == 4) {
                        var deputados = $(ajax.responseText).find("#content");
                        var lista = deputados.find("ul li a");
                        lista.each(function (i) {
                            var nome = $(lista[i]).find("b");
                            var deputado = nome[0].textContent;
                            var option = document.createElement("option");
                            option.text = deputado;
                            option.value = lista[i].getAttribute("href");
                            var select = document.getElementById("deputado");
                            select.appendChild(option);
                        });
                    }
                };
                ajax.send(null);
            }
            function carregarInformacoes(elemento) {
                var deputado = elemento.options[elemento.selectedIndex].value;
                var query = '../deputado/Dep_Lista.asp?Legislatura=54&Partido=QQ&SX=QQ&Todos=None&condic=QQ&forma=lista&UF=';
                var ajax = new XMLHttpRequest();
                ajax.open('GET', query + encodeURIComponent(estado), true);
                ajax.onreadystatechange = function() {
                    if(ajax.readyState == 4) {
                        var deputados = $(ajax.responseText).find("#content");
                        var lista = deputados.find("ul li a");
                        lista.each(function (i) {
                            var nome = $(lista[i]).find("b");
                            var deputado = nome[0].textContent;
                            var option = document.createElement("option");
                            option.text = deputado;
                            option.value = lista[i].getAttribute("href");
                            var select = document.getElementById("deputado");
                            select.appendChild(option);
                        });
                    }
                };
                ajax.send(null);
            }
            function criarFilmes(retorno) {
                var resposta = eval(retorno);
                for(var i = 0; i < resposta.count; i++) {
                    var filme = resposta.movies[i].name;
                    var option = document.createElement("option");
                    option.text = filme;
                    option.value = filme;
                    var select = document.getElementById("deputado");
                    select.appendChild(option);
                }
            }
        </script>
    </head>
    <body id="corpo">
        <form name="form1">
            Estado:
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
            <br/>
            Deputado:
            <select id="deputado" name="deputado" onchange="carregarInformacoes(this)">
                <option value="0">Selecione...</option>
            </select>
        </form>
    </body>
</html>
