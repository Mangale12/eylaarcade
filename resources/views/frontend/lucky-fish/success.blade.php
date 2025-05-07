<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic Transparency Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Orbitron', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(45deg, #000000, #1a1a1a);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative; /* Needed for the video z-index */
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .glass-form {
            background: rgba(0, 0, 0, 0.6); /* Dark semi-transparent */
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            border: 2px solid rgba(0, 255, 255, 0.3);
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.5);
            position: relative;
            overflow: hidden;
            z-index: 1; /* Ensure form is above video */
        }

        /* NEON EFFECTS */
        h1, .subheader, label, .quote-text { /* Added .quote-text */
            text-transform: uppercase;
            text-align: center;
            background: linear-gradient(45deg, #ff00ff, #00ffff, #ff00ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: neonGlow 1.5s infinite alternate;
        }

        h1 {
            font-size: 2.5em;
            font-family: 'Press Start 2P', cursive;
            text-shadow: 0 0 20px rgba(0, 255, 255, 0.8);
            margin-bottom: 10px; /* Space below heading */
        }

        .subheader {
            font-size: 1em;
            text-shadow: 0 0 12px rgba(255, 0, 255, 0.7);
            margin-bottom: 5px; /* Space between subheaders */
        }

        .quote-text { /* Style for the quote */
            font-size: 1.1em; /* Slightly larger than subheader */
            font-weight: bold;
            margin-top: 20px; /* Space above quote */
            margin-bottom: 20px; /* Space below quote */
            text-shadow: 0 0 15px rgba(0, 255, 255, 0.8); /* Primary glow for quote */
        }


        label {
            font-weight: bold;
            letter-spacing: 1px;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
            display: block; /* Make labels block to appear above inputs */
            margin-bottom: 8px;
            margin-top: 15px; /* Add some space above the label */
        }

        .form-group {
            margin-bottom: 20px; /* Space between form groups */
        }


        /* INPUT/SELECT STYLES */
        input, select {
            width: 100%;
            padding: 12px;
            background: rgba(0, 0, 0, 0.5);
            border: 2px solid rgba(0, 255, 255, 0.5);
            border-radius: 8px;
            color: #00ffff;
            font-size: 14px;
            text-transform: uppercase;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
            -webkit-appearance: none; /* Remove default browser styling for select */
            -moz-appearance: none;
            appearance: none;
        }

         select {
             background-image: url('data:image/svg+xml;utf8,<svg fill="%2300ffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
             background-repeat: no-repeat;
             background-position: right 10px top 50%;
             background-size: 16px auto;
             padding-right: 30px; /* Add padding to make space for arrow */
         }


        input:focus, select:focus {
            outline: none;
            border-color: rgba(255, 0, 255, 0.8);
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.7);
            color: #ff00ff; /* Change text color on focus */
        }

        ::placeholder {
            color: rgba(255, 0, 255, 0.7);
            text-shadow: 0 0 5px rgba(255, 0, 255, 0.5);
            opacity: 1; /* Ensure placeholder is visible */
        }

        select option {
             background: #1a1a1a; /* Dark background for options */
             color: #00ffff; /* Neon blue text for options */
             text-transform: uppercase;
             padding: 8px; /* Add some padding to options */
         }


        .divider {
            border: none;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0,255,255,0.5), transparent);
            margin: 25px 0;
        }

        .game-id-section {
            display: flex;
            gap: 15px;
        }

        .game-id-section > div {
            flex: 1;
        }

        #bgVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: 0; /* Send video to back */
            opacity: 0.6;
            object-fit: cover; /* Cover the entire screen */
        }

         /* SUBMIT BUTTON STYLES */
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 30px;
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            border: none;
            border-radius: 8px;
            color: #1a1a1a; /* Dark text color */
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.6);
            letter-spacing: 2px;
            font-family: 'Press Start 2P', cursive;
        }

        button[type="submit"]:hover {
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            box-shadow: 0 0 30px rgba(255, 0, 255, 0.8);
            color: #000000; /* Even darker text on hover */
        }

        button[type="submit"]:active {
             transform: scale(0.98);
             box-shadow: 0 0 15px rgba(0, 255, 255, 0.4);
         }


         /* VALIDATION ERROR STYLES */
        .invalid-feedback {
            color: #ff00ff; /* Neon pink for errors */
            font-size: 0.9em;
            margin-top: 5px;
            display: block;
            text-align: center;
            font-family: 'Orbitron', sans-serif; /* Use Orbitron for errors */
            text-shadow: 0 0 8px rgba(255, 0, 255, 0.5);
        }

         input.is-invalid, select.is-invalid {
             border-color: rgba(255, 0, 255, 0.8) !important; /* Highlight invalid fields */
             box-shadow: 0 0 15px rgba(255, 0, 255, 0.6) !important;
         }


        /* ANIMATIONS */
        @keyframes neonGlow {
            0% { text-shadow: 0 0 10px rgba(255, 0, 255, 0.7), 0 0 15px rgba(0, 255, 255, 0.5); }
            100% { text-shadow: 0 0 20px rgba(0, 255, 255, 0.9), 0 0 25px rgba(255, 0, 255, 0.6); }
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 1.8em;
            }
            .subheader, .quote-text { /* Added .quote-text */
                font-size: 0.8em;
            }
            .glass-form {
                padding: 20px;
            }
            .game-id-section {
                 flex-direction: column;
                 gap: 0; /* Remove gap on smaller screens */
             }
             .game-id-section > div {
                 flex: none; /* Remove flex on smaller screens */
                 width: 100%; /* Full width */
             }
             label {
                 margin-top: 10px;
             }
             button[type="submit"] {
                 font-size: 1em;
                 padding: 12px;
             }
        }
    </style>
</head>
<body>
    <div class="glass-form">
        <div class="header">
            <h1>Welcome to Lucky Fish</h1>
            <p class="subheader">EMBARK ON AN EXHILARATING JOURNEY AND UNLOCK A WORLD OF REWARDS.</p>
            <p class="subheader">BET ON FOUR WATER LUCKY FISH.</p>
            {{-- Add the quote here --}}
            <p class="quote-text">CAST YOUR LINE, TEST YOUR FATE. PLAY LUCKY FISH, WHERE FORTUNE AWAITS!</p>
        </div>

        <hr class="divider">

        {{-- Add the form here --}}
        {{-- Note: This HTML block previously contained the form.
             If you want the form back, paste the <form> ... </form> block here.
             If you just want the quote display, this is fine as is. --}}


    </div>

    {{-- Note: The src="{{ asset('public/bg.webm') }}" will only work in frameworks like Laravel.
         For a static HTML file, you need a direct path to the video file.
         e.g., src="bg.webm" assuming it's in the same directory.
         Using asset() assumes your video is in the public directory, e.g., public/videos/bg.webm --}}
    <video autoplay muted loop id="bgVideo">
        <source src="{{ asset('public/bg.webm') }}" type="video/webm">
        <source src="{{ asset('public/bg.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>