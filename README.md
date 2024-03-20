# SaaSAI App

This app was created using these YouTube clips from MapilitMedia Inc. titled How to Buid an AI SaaS using Laravel & OpenAI. There are 5 total videos for this project where this app consits of the first two and fourth video. Did make some slight modifications to be able to use the latest OpenAI API.

## How to run

Download the app or clone it. Once it is installed in your machine, in the root of the app

1. composer install
2. npm install
3. npm run dev
4. cp .env.example .env
5. You need to obtain an OPENAI_API_KEY and place that in the .env file
6. Create a database and put the config in the .env file
7. php artisan migrate
8. php artisan serve // which starts the app in your browser.
9. Register a user and you should be in the dashboard where you can generate a blog and an image.

## Additional Comments

Have only used this locally. The 3rd clip shows how to create a paid version using Stripe and the 5th is how to publish using Forge.

The Image Generator is set to use DALL-e-2. Have used it with DALL-e 3 and the only changes that are needed is change the model to dall-e-3 and the size to 1024x1024.
