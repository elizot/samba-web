const listInfo = document.querySelector('#list-info')
fetch('../data/info.json')
    .then(res => res.json())
    .then(json => showContent(json))

function showContent(info) {
    const table = document.querySelector('table.info tbody');
    for (const inf of info) {
        const view = `<tr>
      <td><b>${inf.info1}</b></td>
      <td>${inf.info2}</td>
    </tr>`;
        table.insertAdjacentHTML('beforeend', view);
    }
}