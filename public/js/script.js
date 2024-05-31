const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text"),
      mainContent = document.querySelector('.main-content');

      //--------------------------------------------
      // Mensajes
      messagesButton = document.getElementById('messages-button'),
      messagePanel = document.getElementById('message-panel'),
      closeMessagePanel = document.getElementById('close-message-panel');
     
     messagesButton.addEventListener('click', () => {
      messagePanel.classList.add('open');
      mainContent.style.marginRight = '400px'; // Ajusta el margen del contenido principal
      });

      closeMessagePanel.addEventListener('click', () => {
        messagePanel.classList.remove('open');
        mainContent.style.marginRight = '250px'; // Vuelve al margen original
    });
    
    
    //-----------------------------------
      toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
      });

      modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
          modeText.innerText = "Light mode";
      }else{
          modeText.innerText = "Dark mode";
          
      }
      });