const headerButtonStyle = document.body.querySelector('button#header-button-style').style;

function mouseEnter(){
    headerButtonStyle.boxShadow = `none`;
    headerButtonStyle.border = `3px solid #49708A`;
}
function mouseLeave(){
    headerButtonStyle.boxShadow = `0px 4px 4px rgba(0, 0, 0, 0.25)`;
    headerButtonStyle.border = `none`;
}