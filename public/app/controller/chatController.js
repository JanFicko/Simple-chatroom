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