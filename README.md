## What this app does 
This Laravel app takes a blog title as input and uses the OpenAI API to generate a blog post based on your title. 

## Setup Instructions
For Mac:
1. Make sure you have PHP and Composer installed.
2. Clone the repo: git clone <your-repo-url>
3. Navigate to the project folder: cd blog-ai
4. Copy .env.example to .env: cp .env.example .env
5. Add your OpenAI API key in the .env file.
6. Start the server: php artisan serve
7. Open your browser and go to http://localhost:8000/ai-form

## Screenshot 
screenshot.png

## Reflection Questions 
1. How did the AI output change when you modified the tone or role in your prompt?
- Changing the tone or role in the prompt made the AI generate text that sounded more formal, casual, or matched the personality I defined, which improved the quality and relevance of the output.

2. What would you improve about the API integration for a production app?
- I would add caching to reduce API calls.

3. What’s one thing you learned about Laravel that you hadn’t used before?
- I learned how to integrate the OpenAI API into a Laravel app, including how to securely use an API key with environment variables.

