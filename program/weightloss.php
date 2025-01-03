<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodybuilding Program</title>
    <link rel="stylesheet" href="../src/css/weightloss.css">

</head>

<body>
    <header>
        <nav>
            <div class="logo-container">
                <a href="../index.php"><img src="../src/css/images/logo.png" alt="logo" class="logo"></a>
                <span class="logo-name">Iron Forge Gym</span>
            </div>
            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php#program">Program</a></li>
                    <li><a href="../index.php#subscription">Subscription</a></li>
                    <li><a href="../index.php#booking">Booking</a></li>
                    <li><a href="../index.php#about-us">About Us</a></li>
                </ul>

                <button class="menu-button" onclick="toggleSidebar()">☰</button>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    <ul class="sidebar">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../index.php#program">Program</a></li>
        <li><a href="../index.php#subscription">Subscription</a></li>
        <li><a href="./index.php#booking">Booking</a></li>
        <li><a href="../index.php#about-us">About Us</a></li>
        <button class="sidebar-close-btn">&times;</button>
    </ul>

    <div class="body-title">
        <h1>FITNESS CHALLENGE</h1>
    </div>


    <!-- Exercise Sections -->
    <div class="weight-loss-choices">
        <img src="../src/css/images/calorie-deficit.jpg" alt="Calorie Deficit">
        <div>
            <h1>CALORIE DEFICIT</h1>
            <p>A calorie deficit is a state where you consume fewer calories than your body burns, leading to weight loss by forcing the body to use stored energy (fat) for fuel.

                To lose 1 pound of body weight, a deficit of approximately 3,500 calories is generally required, though individual metabolic factors can influence results.</p>
            <ul>
                <li><strong>Facilitates Weight Loss: </strong>Encourages the body to burn stored fat for energy.</li>
        </div>
    </div>

    <div class="weight-loss-choices">
        <img src="../src/css/images/intermittent-fasting.jpg" alt="Intermittent Fasting">
        <div>
            <h1>INTERMITTENT FASTING</h1>
            <p>Intermittent fasting (IF) is an eating pattern that alternates between periods of fasting and eating. It doesn’t focus on what you eat but rather when you eat. Common methods include the 16/8 method, eat-stop-eat, and the 5:2 diet.
            </p>
            <ul>
                <li><strong>Weight Loss: </strong>Helps reduce calorie intake, increase fat burning, and improve metabolic rate.</li>
            </ul>
        </div>
    </div>

    <div class="weight-loss-choices">
        <img src="../src/css/images/cardio.jpg" alt="cardio">
        <div>
            <h1>CARDIO</h1>
            <p> Cardio, short for cardiovascular exercise, involves rhythmic activities that increase your heart rate and breathing. Examples include running, cycling, swimming, and brisk walking.

                Targets Heart and Lungs: Strengthens the cardiovascular system by improving heart and lung efficiency</p>
            <ul>
                <li><strong>Heart Health:</strong>Reduces risk of heart disease by improving blood circulation and lowering blood pressure.</li>
            </ul>
        </div>
    </div>

    <div class="weight-loss-choices">
        <img src="../src/css/images/strenght-training.jpg" alt="Strenght Training">
        <div>
            <h1>STRENGHT TRAINING</h1>
            <p> Strength training, also known as resistance training, involves exercises designed to improve muscle strength, power, and endurance using resistance like weights, bands, or bodyweight.</p>
            <ul>
                <li><strong>Muscle Development: </strong>Builds and tones muscles for improved strength and appearance.</li>
            </ul>
        </div>
    </div>

    <script src="../src/js/script1.js"></script>
</body>

</html>