#!/bin/bash

# Function to push changes to GitHub
function push_to_github() {
    # Add all files to the git repository
    git add .

    # Commit the changes
    git commit -m "Update repo"

    # Push to the remote repository
    git push
}

# Run the script every 5 minutes
while true; do
    # Call the function to push changes to GitHub
    push_to_github

    # Sleep for 5 minutes
    sleep 600
done
