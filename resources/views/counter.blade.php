<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pusher Test</title>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;

          var pusher = new Pusher('fbf8e73875dec2fda44b', {
            cluster: 'eu'
          });

          var channel = pusher.subscribe('my-channel');
          channel.bind('form-submitted', function(data) {
            alert(JSON.stringify(data));
          });
        </script>
      </head>
      <body>
        <h1>Pusher Test</h1>
        <p>
          Try publishing an event to channel <code>my-channel</code>
          with event name <code>my-event</code>.
        </p>
      </body>
</html>
