(function() {

    // Open a connection, and subscribe to the demo channel.
    var pusher = new Pusher('53e783bfeb1a8915cc71');
    var channel = pusher.subscribe('demo');

    // Namespacing
    window.App = {};
    App.Listeners = {};

    // Notifier
    App.Notifier = function() {
        this.notify = function(message) {
            var template = Handlebars.compile($('#flash-template').html());

            $(template({ message: message})).appendTo('body').fadeIn(300);
        }
    };

    // Listeners
    App.Listeners.Post = {
        whenPostWasPublished: function(data) {
            (new App.Notifier).notify(data.title);
        }
    };

    // Register bindings
    channel.bind('PostWasPublished', App.Listeners.Post.whenPostWasPublished);

})();