const click = document.getElementById('click');
 
click.addEventListener('click', () => {
    const buttonType = document.getElementById('buttonType');
    buttonType.style.display = buttonType.style.display === 'block' ? 'none' : 'block';

});