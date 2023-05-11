function speak(text) {
    console.log(`${text}`)
    const synth = window.speechSynthesis;
    const element = document.createElement('div');
    element.innerHTML = text;
    const decodedText = element.innerHTML.replace(/&amp;/g, '&').replace(/&#39;/g, '\'').replace(/&#34;/g, '\"').replace(/&#40;/g, '(').replace(/&#41;/g, ')');
  
    const utterance = new SpeechSynthesisUtterance(decodedText);
    utterance.pitch = 2;
    synth.speak(utterance);
}
