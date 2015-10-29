if (Meteor.isClient) {

    Session.setDefault('isOnline', true);

    var timeoutId;

    Tracker.autorun(function() {

        if (timeoutId) Meteor.clearTimeout(timeoutId);
        timeoutId = null;

        if (Meteor.status().connected === false) {
            timeoutId = Meteor.setTimeout(function() {
                Session.set('isOnline', false);
            }, 5000);
        } else {
            Session.set('isOnline', true);
        }
    });

    Template.registerHelper('isOnline', function() {

        return Session.get('isOnline');
    });
}
