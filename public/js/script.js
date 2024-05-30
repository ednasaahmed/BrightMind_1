const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

      //--------------------------------------------
      //Mensajes
    //   messagesButton = document.getElementById('messages-button'),
    //   messagePanel = document.getElementById('message-panel'),
    //   closeMessagePanel = document.getElementById('close-message-panel');
     
    //  messagesButton.addEventListener('click', () => {
    //   messagePanel.style.display = 'block';
    //   });

    //   closeMessagePanel.addEventListener('click', () => {
    //     messagePanel.style.display = 'none';
    // });
    
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