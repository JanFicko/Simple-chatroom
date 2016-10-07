/**
 * This handles retrieving and sending data and is used by controllers.
 */
app.service('ChatService', function($http){
    return {

        // Returns all messages.
        get: function () {
            return $http.get('api/chat');
        },

        post: function (chatData) {
            return $http({
                method: 'POST',
                url: 'api/chat',
                headers: {'Content-Type': 'application/json'},
                data: chatData
            });
        },

        destroy: function (id) {
            return $http.delete('api/chat/' + id);
        }
    };
});