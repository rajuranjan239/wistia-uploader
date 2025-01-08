<!-- Include the Wistia API script for embedding and uploader functionalities -->
<script src="//fast.wistia.com/assets/external/api.js" async></script>

<!-- Include the Wistia uploader CSS for styling the uploader interface -->
<link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" />

<!-- Placeholder div for the Wistia uploader, specifying its dimensions -->
<div id="wistia_uploader" style="height:360px;width:640px;"></div>

<script>
  // Initialize the Wistia API queue if it does not already exist
  window._wapiq = window._wapiq || [];

  // Push a function to the Wistia API queue to initialize the uploader
  _wapiq.push(function(W) {
    // Create a new Wistia uploader instance with the specified options
    window.wistiaUploader = new W.Uploader({
      // Provide the access token for authentication with the Wistia API
      accessToken: "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
      
      // Specify the ID of the div where the uploader will be embedded
      dropIn: "wistia_uploader",
      
      // Provide the project ID where uploaded videos will be stored
      projectId: "xxxxxx"
    });
  });
</script>
