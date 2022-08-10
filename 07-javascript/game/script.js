

// Elements
const round = document.getElementById('round');
const followButtons = document.getElementsByClassName('box');
const startButton = document.getElementById('startButton');

// Class js

class Follow {
    constructor(followButtons, startButton, round) {
        this.round = 0;
        this.userPosition = 0;
        this.totalRounds = 15;
        this.sequence = [];
        this.speed = 1000;
        this.blockedButtons = true;
        this.buttons = Array.from(followButtons);
        this.display = {
            startButton,
            round
        }
        this.errorSound = new Audio('./sounds/error-sound.mp3');
        this.buttonSounds = [
            new Audio('./sounds/1.mp3'),
            new Audio('./sounds/2.mp3'),
            new Audio('./sounds/3.mp3'),
            new Audio('./sounds/4.mp3'),
        ]
    }

// Start the page
init() {
    this.display.startButton.onclick = (e) => this.startGame();
}
// start the game
startGame() {
    this.display.startButton.disabled = true;
    this.updateRound(0);
    this.userPosition = 0;
    this.sequence = this.createSequence();
    this.buttons.forEach((element, i) => {
        element.classList.remove('winner');
        element.onclick = () => this.buttonClick(i);
    });
    this.showSequence();
}

// Update the round and board
updateRound(value) {
    this.round = value;
    this.display.round.textContent = `Round ${this.round}`;
}

// Create a random array of buttons
createSequence() {
    return Array.from({length: this.totalRounds}, () => this.getRandomColor());
}

// returns the random number between 0 and 3
getRandomColor() {
    return Math.floor(Math.random() * 4);
}

// execute a function when a button is clicked
buttonClick(value) {
    !this.blockedButtons && this.validateChosenColor(value);
}

// validates if the button corresponds to the value of the sequence
validateChosenColor(value) {
    if (this.sequence[this.userPosition] == value) {
        this.buttonSounds[value].play();

        if (this.round === this.userPosition) {
            this.updateRound(this.round + 1);
            this.speed /= 1.02
            this.isGameOver();
        } else {
            this.userPosition++;
        }
        
    } else {
        this.gameLost();
    }
}

// make sure you haven't finished the game
isGameOver() {
    if (this.round === this.totalRounds) {
        this.gameWon();
    } else {
        this.userPosition = 0;
        this.showSequence();
    };
}

// shows the sequence of buttons that the user will have to touch
showSequence() {
    this.blockedButtons = true;
        let sequenceIndex = 0;
        let timer = setInterval(() => {
            const button = this.buttons[this.sequence[sequenceIndex]];
            this.buttonSounds[this.sequence[sequenceIndex]].play();
            this.toggleButtonStyle(button)
            setTimeout( () => this.toggleButtonStyle(button), this.speed / 2)
            sequenceIndex++;
            if (sequenceIndex > this.round) {
                this.blockedButtons = false;
                clearInterval(timer);
            }
        }, this.speed);
}

// Paint the buttons to show them in the sequence
toggleButtonStyle(button) {
    button.classList.toggle('active');
}

// Update the game when the player lost
gameLost() {
    this.errorSound.play();
    this.display.startButton.disabled = false;
    this.blockedButtons = true;
}

// Show the animation of win and update the game when the player is winner
gameWon() {
    this.display.startButton.disabled = false;
    this.blockedButtons = true;
    this.buttons.forEach(element =>{
        element.classList.add('winner');
    });
    this.updateRound('🎉🥳')
}
}
const follow = new Follow(followButtons, startButton, round);
follow.init();