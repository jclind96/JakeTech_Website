<form action="process_contact.php" method="post">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="phone_number">Your Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number" required>
  
    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Your Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Submit</button>
</form>
