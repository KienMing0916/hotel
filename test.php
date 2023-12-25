<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Up Example</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Counter Up plugin -->
    <script src="path/to/counterup/jquery.counterup.min.js"></script>
    <!-- Include Waypoints plugin (required by Counter Up) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
</head>
<body>

<!-- Your HTML element with data-toggle="counter-up" -->
<span data-toggle="counter-up" data-counter-delay="10" data-counter-target="#target-number">0</span>

<!-- The target number element -->
<div id="target-number" class="hidden">100</div>

<script>
    // Activate Counter Up
    $(document).ready(function() {
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10, // Delay in milliseconds between each number change
            time: 1000 // Duration in milliseconds for the counting animation
        });
    });
</script>

</body>
</html>
