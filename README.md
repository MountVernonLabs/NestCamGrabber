# NestCamGrabber
Simple PHP script that can be run as a cron job to retrieve an current image off a Dropcam / Nest Cam

# Installation
- Rename cameras.json.example to cameras.json
- Edit cameras.json and set your camera names and UUID
- Camera names will be the subfolders where your images are stored
- Your UUID can be by right clicking on the thumbnail image of your camera in the Nest Control center.  
- Add as many cameras as you want
- Run php grab.php from your command line or schedule it to automatically run in your cron
