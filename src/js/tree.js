var usuario;

function diretorios() {
    fetch('../data/folder.json')
        .then(res => res.json())
        .then(json => clickDir(json))
}

function clickDir(j) {
    $('#event_body').html('<div id="diretorio"></div>')
    $('#diretorio').jstree({
        'core': {
            'data': j
        }
    });
}

function clickInf() {
    Inf(usuario)
}

function Inf(user) {
    const texto = `<p>ID = ${user.id}</p>
                    <p>Parent = ${user.parent}</p>
                    <p>Nome = ${user.text}</p>`
    $('#event_body').html(texto);
}

fetch('../data/user.json')
    .then(res => res.json())
    .then(json => usuarios(json));

function usuarios(j) {
    $('#event_group').html('<div id="jstree"></div>')
    $("#jstree").jstree({
        'core': {
            'data': j
        }
    });
    $(function() {
        //Cria uma instância quando o DOM estiver pronto
        $('#jstree').jstree();
        // Interage com a árvores
        $('#jstree')
            // Percorre a árvore para escrever a informação
            .on('changed.jstree', function(e, data) {
                var i, j, r = [];
                for (i = 0, j = data.selected.length; i < j; i++) {
                    r.push(data.instance.get_node(data.selected[i]).parent);

                    if (data.instance.get_node(data.selected[i]).parent != "#") {
                        const header = `<button class="btn btn-outline-secondary btn-sm" onclick="clickInf()" id="inf">Informações</button>
                                <button class="btn btn-outline-secondary btn-sm" onclick="diretorios()" id="dir">&nbspDiretórios&nbsp</button>`
                        $('#event_header').html(header);
                        usuario = data.instance.get_node(data.selected[i]);
                        $('#event_body').html(Inf(usuario));
                    } else {
                        const header = ''
                        const body = `<img class="vertical-align img-card" src="../assets/pasta.jpg">`
                        $('#event_body').html(body);
                        $('#event_header').html(header);
                    }
                }
            })
    });
}