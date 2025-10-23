<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
             font-family: "Baskervville", serif; 
        }
        :root {
    --color-light: #FFF8EB; /* Creamy White - Main Background */
    --color-primary: #B31E32; /* Deep Red - Accent/Highlight */
    --color-text-dark: #2a2a2a; /* Main Headings/Dark Text */
    --color-text-body: #444; /* Standard Body Text */
    --color-button-hover: #8C1927; /* Darker red for button hover */
    --color-green: #25D366; /* WhatsApp Green */
    --color-card-bg: #FFFFFF; /* Pure White background for cards */
    --color-video-bg: #1a1a1a; /* Dark background for video section */
}
h2 {
    font-size: 2.8rem; /* Slightly larger main heading */
    color: var(--color-text-dark) !important; /* Use dark text for main section titles */
}
.form-title {
    text-align: center;
    margin-bottom: 50px; 
    font-size: 2.5rem;
    color: var(--color-text-dark);
    position: relative;
    padding-top: 10px;
}

.form-title::after {
    content: '';
    width: 80px;
    height: 4px;
    background-color: var(--color-primary); 
    position: absolute;
    left: 50%;
    bottom: -10px;
    transform: translateX(-50%);
    border-radius: 2px;
}

        .quote {
    background-color: var(--color-light); 
    padding: 60px 5%;
}

.quote-form {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.form-group {
    flex: 1;
    min-width: calc(50% - 10px);
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: var(--color-text-dark);
    font-size: 0.95rem;
}

.form-input, .form-select, .form-textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.form-input:focus, .form-select:focus, .form-textarea:focus {
    border-color: var(--color-primary);
    box-shadow: 0 0 5px rgba(179, 30, 50, 0.2);
    outline: none;
}

.form-textarea {
    resize: vertical;
    height: 120px;
}

.form-submit {
    width: 100%;
    padding: 15px;
    background-color: var(--color-primary); 
    border: none;
    border-radius: 8px;
    color: var(--color-light);
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s;
}

.form-submit:hover {
    background-color: var(--color-button-hover);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    .form-group {
        min-width: 100%;
        margin-bottom: 15px;
    }
    .quote-form {
        padding: 20px;
    }
}

    </style>
</head>
<body>
    <section class="quote">
    <form id="request-quote" class="quote-form" action="submit_quote.php" method="post">
        <h2 class="form-title" style="color: #1a1a1a; text-align: center; ">Request A Quote</h2>
        <div class="form-row">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="phone" class="form-label">Phone or WhatsApp</label>
                <input type="text" id="phone" name="phone" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="country" class="form-label">Country</label>
                <input type="text" id="country" name="country" class="form-input" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" class="form-input">
            </div>
            <div class="form-group">
                <label for="company" class="form-label">Company</label>
                <input type="text" id="company" name="company" class="form-input">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="cutting-material" class="form-label">Cutting Material</label>
                <select id="cutting-material" name="cutting-material" class="form-select" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Carbon Steel">Carbon Steel</option>
                    <option value="Material Steel">Material Steel</option>
                    <option value="Aluminium">Aluminium</option>
                    <option value="Brass">Brass</option>
                    <option value="Other Metals">Other Metals</option>
                    <option value="All Metals">All Metals</option>
                    <option value="Metals and Non Metals">Metals and Non Metals</option>
                </select>
            </div>
            <div class="form-group">
                <label for="machine-type" class="form-label">Machine Type</label>
                <select id="machine-type" name="machine-type" class="form-select">
                    <option value="" disabled selected>Select</option>
                    <option value="Laser Cutting Machine">Laser Cutting Machine</option>
                    <option value="Bending Machine">Bending Machine</option>
                    <option value="Laser Welder">Laser Welder</option>
                    <option value="Automation">Automation</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" class="form-textarea" placeholder="Please leave us the material thickness and working area, we will offer the quotation to you as soon as possible."></textarea>
        </div>
        <button type="submit" class="form-submit">Submit</button>
    </form>
</section>

</body>
</html>