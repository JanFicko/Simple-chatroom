/**
 *  This controller retrieves data from chatService
 *  and associates $scope with it.
 */
app.controller('ChatController', function($scope, ChatService){

    $scope.chatData = {};
    $scope.loading = true;

    // Initializes controller.
    init();

    function init() {
        // Populates view with data from service.
        ChatService.get()
            .success(function (data) {
                $scope.chats = data;
                $scope.loading = false;
            });
    }

    // Enable pusher logging - don't include this in production
    //Pusher.logToConsole = true;

    /**
     * Define pushers info.
     * @type {Pusher}
     */
    var pusher = new Pusher('901189d37b95f33a23fe', {
        cluster: 'eu',
        encrypted: true
    });

    /**
     * Receive data send from pusher and do something with it.
     */
    var channel = pusher.subscribe('chat_channel');
    channel.bind('push_messages', function () {
        init();
    });

    $scope.submitChat = function () {
        $scope.loading = true;

        ChatService.post($scope.chatData)
            .success(function (data) {

                // Re-initialize
                init();
            })
            .error(function (data) {
                console.log(data);
            });
    };

    $scope.deleteChat = function (id) {
        $scope.loading = true;

        ChatService.destroy(id)
            .success(function (data) {

                // Re-initialize
                init();
            })
            .error(function (data) {
                console.log(data);
            });
    };
});