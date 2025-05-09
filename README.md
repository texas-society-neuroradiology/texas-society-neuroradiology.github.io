# texas-society-neuroradiology.github.io
TSNR's Public Website Hosting

username: dsalmon
password: 


## Steps to Edit the Website:

1. Clone the Github Repo

2. Run the docker compose file using `docker compose up -d`. This will start two containers (the backend sql database and the webserver to access Wordpress)

3. Make edits to the Wordpress website at `localhost:80/admin`. Login using the username: dsalmon and the password I've secretly shared with you. 

4. Download the website using the `SimplyStatic` plugin on wordpress. This will place the website in the `deploy` folder of the Github Repo

5. Copy/Paste contents of the deploy folder to the gh-pages branch of the github repo. 

6. Push your changes to both the main and gh-pages branches to Github.

7. You should see your updated website at `tsnr.org`!