# Bulma-notifications
Pure <b>Javascript</b> and <b>CSS</b> notifications library themed with <b>Bulma css</b> framework.
If you're using Bulma and you want interactable and reusable notifications for your website or web app, Bulma-notifications is just what you need !
<br/>
 <p align="center">
  <img src="b-notifs_preview.png"/>
</p>
<br/>

# How to use Bulma-notifications
-Download 'bulmanotifications.js' and 'style.css' files from this repository.<br/><br/>
-Use Bulma CDN or download the entire framework.<br/><br/>
-Place these files in your project directory.<br/><br/>
-Import the Bulma-notifications module 'bulmanotifications.js' into your own script :<br/>
<b><i>import BulmaNotification from './bulma-notifications.js';</i></b><br/><br/>
-Create a notification instance :<br/>
<b><i>notif = new BulmaNotification();</i></b><br/><br/>
-Finally, call this method with your instance :<br/>
<b><i>notif.show(title, message, context, duration);</i></b><br/>
<i>title</i> : the notification title.<br/>
<i>message</i> : the notification message.<br/>
<i>context</i> : the notification theme relative to the desired context (primary, info, warning, danger, success, link).<br/>
<i>duration</i> : the notification visibility duration (ms). If you want to disable this duration, just put -1.<br/>

<b>Bulma css</b> notifications documentation : https://bulma.io/documentation/elements/notification/
