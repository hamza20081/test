document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if(name && email && message) {
        alert('Vielen Dank für Ihre Nachricht, ' + name + '! Wir werden uns bald bei Ihnen melden.');
        this.reset();
    } else {
        alert('Bitte füllen Sie alle Felder aus.');
    }
});
