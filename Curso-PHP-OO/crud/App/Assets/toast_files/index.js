import BulmaNotification from './bulma-notifications.js';

let notif;
let notif1;


window.onload = () => {
    notif = new BulmaNotification();
    //document.querySelector('#submit').addEventListener('click', showNotification);
    notif.show("Mensagem!", "Produta excluído com sucesso!", "success", 2000);
};

// Display a notification
function showNotification(){
    notif.show("Mensagem!", "Produta excluído com sucesso!", "success", 2000);
}
