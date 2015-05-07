function playSound (filename) {
    document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
}
$(document).ready(function () {
    var $container = $('.game');
    playSound('media/welcome-first');
    $('.holder-number').on('click', function () {
        var $me = $(this),
            numberQuestion = parseInt($me.data('id'), 10),
            $holder = $me.parent(),
            text = $holder.find('.text').html(),
            $imageResult = $holder.find('.image'),
            $backgroundMask = $('.background-mask'),
            $showQuestion = $('.show-question'), $incorrectButton, $correctButton;
        $me.hide('fast');
        $backgroundMask.show();
        $showQuestion.find('.title').text('Question ' + numberQuestion);
        $showQuestion.find('.question').html(text);
        $showQuestion.show();
        $incorrectButton = $showQuestion.find('.incorrect');
        $correctButton = $showQuestion.find('.correct');
        var myVar = setTimeout(function () {
            if (numberQuestion == 9) {
                playSound('media/felez-2');
            } else {
                playSound('media/human-countdown');
            }
        }, 4000);
        $incorrectButton.on('click', function () {
            $backgroundMask.hide();
            $showQuestion.hide();
            $me.show('fast');
            $incorrectButton.unbind('click');
            $correctButton.unbind('click');
            playSound('media/error');
            clearTimeout(myVar);
        });
        $correctButton.on('click', function () {
            $backgroundMask.hide();
            $showQuestion.hide();
            $imageResult.show('fast');
            $incorrectButton.unbind('click');
            $correctButton.unbind('click');
            playSound('media/welcome');
            if ($('.holder .image:hidden').length === 0) {
                setTimeout(function () {
                    playSound('media/votay');
                }, 4000);
            }
            clearTimeout(myVar);
        });
    });
});