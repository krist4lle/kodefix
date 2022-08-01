const sms = document.getElementById('sms');
const result = document.getElementById('result');

sms.addEventListener('input', function () {
    const data = {
        sms: sms.value
    }

    fetch('/api/sms', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(json => {
            if (json.message) {
                result.innerText = json.message;
            } else {
                result.innerText = json;
            }
        })
})
