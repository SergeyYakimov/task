const backgroundButton = document.querySelector('#button');
const bodyBlock = document.querySelector('body');
const headerBlock = document.querySelector('header');
const tweetsBlock = document.querySelector('#tweets');
const sliderBlock = document.querySelector('#intro-slider .slides');
const sectionInfoBlock = document.querySelector('#info');
const sectionWorksBlock = document.querySelector('#works');
const sectionJournalBlock = document.querySelector('#journal');
const sectionCallBlock = document.querySelector('#call-to-action');


const backgroundChangeHandler = function (evt) {
    evt.preventDefault();

    (bodyBlock.hasAttribute('style') && bodyBlock.style.background == 'red') ? bodyBlock.removeAttribute('style') : bodyBlock.style.background = 'red';
    headerBlock.hasAttribute('style') ? headerBlock.removeAttribute('style') : headerBlock.style.background = 'red';
    tweetsBlock.hasAttribute('style') ? tweetsBlock.removeAttribute('style') : tweetsBlock.style.background = 'red';
    sliderBlock.hasAttribute('style') ? sliderBlock.removeAttribute('style') : sliderBlock.style.background = 'red';
    sectionInfoBlock.hasAttribute('style') ? sectionInfoBlock.removeAttribute('style') : sectionInfoBlock.style.background = 'red';
    sectionWorksBlock.hasAttribute('style') ? sectionWorksBlock.removeAttribute('style') : sectionWorksBlock.style.background = 'red';
    sectionJournalBlock.hasAttribute('style') ? sectionJournalBlock.removeAttribute('style') : sectionJournalBlock.style.background = 'red';
    sectionCallBlock.hasAttribute('style') ? sectionCallBlock.removeAttribute('style') : sectionCallBlock.style.background = 'red';

};

backgroundButton.addEventListener('click', backgroundChangeHandler);