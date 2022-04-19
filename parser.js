const { nodeName } = require("jquery");


window.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    let textNodes = [];

    function recursy(elem) {
        elem.childNodes.forEach(item => {
            if(item.nodeName.match(/^H\d/)) {
                let obj = {
                    header: item.nodeName,
                    content: item.textContent.trim()
                };
                textNodes.push(obj);
            }
            recursy(item);
        });
    }

    recursy(body);
    
    fetch("https://jsonplaceholder.typicode.com/posts", {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(textNodes)
    })
    .then(response => response.json())
    .then(json => console.log(json));

    
});