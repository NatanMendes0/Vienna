const headerButtonStyle = document.body.querySelector('button#header-button-style');

function mouseEnter(){
    headerButtonStyle.style.boxShadow = `none`;
    headerButtonStyle.style.border = `3px solid #49708A`;
}
function mouseLeave(){
    headerButtonStyle.style.boxShadow = `0px 4px 4px rgba(0, 0, 0, 0.25)`;
    headerButtonStyle.style.border = `none`;
}