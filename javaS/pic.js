function anim(targetedDiv){
    var targetedLetter = $("#"+targetedDiv+" .rotate").text();

    var asciiValue = targetedLetter.charCodeAt(0);

    var pointer = 65;

    ChangeChar();


    function ChangeChar() {

        if(pointer <= asciiValue){
            $("#"+targetedDiv+" .rotate").text(String.fromCharCode(pointer));

            pointer++;
            setTimeout(ChangeChar,20);
        }
        else {
            $(this).stop;
        }

    }

}