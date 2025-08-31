# PHP Contact Form with Validation
A simple contact form built in PHP that demonstrates:
- Input sanitization
- Server-side validation
- Error handling with inline messages
- Email sending using `mail()` function
- Logging submissions to a text file

## Email Sending Notes
- The `mail()` function works only if your server has MTA configured

## Submissions Log
Every valid form submission is appended to `submissions.txt` in this format:
> Name: John Doe
>
> Email: john@example.com
>
> Phone: 1234567890
>
> Message: Hello, testing the contact form!
>
>----------------------
>