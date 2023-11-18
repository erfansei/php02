<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            direction: rtl;
        }
    </style>
</head>

<body class="w-1/2 h-max m-auto border-2 border-slate-300 font-sans">
    <div class="mt-5 text-center font-bold text-xl">
        <span>Blog Posts</span>
    </div>
    <?php
    $blog = [
        [
            "title" => "متا برای توسعه تراشه اختصاصی عینک‌های واقعیت افزوده با مدیاتک همکاری می‌کند",
            "image" => "https://static.digiato.com/digiato/2023/11/Meta-910x600.jpg",
            "content" => "«وینس هو»، مدیرعامل مدیاتک در جریان اجلاس سال 2023 این شرکت، رسماً همکاری جدیدی با متا را اعلام کرد. با وجود این همکاری، غول شبکه‌های اجتماعی قادر خواهد بود تا قابلیت‌های واقعیت افزوده یا تجربیات واقعیت ترکیبی بیشتری را برای عینک هوشمند Ray-Ban Meta خود توسعه دهد."
        ],
        [
            "title" => "با میرا موراتی، مدیرعامل جدید OpenAI آشنا شوید",
            "image" => "https://static.digiato.com/digiato/2023/04/cover-1-910x600.jpg",
            "content" => "همه ما OpenAI را با ChatGPT و Dall-E می‌شناسیم؛ اما احتمالاً ستاره اصلی این شرکت، «میرا موراتی»، مدیر ارشد فناوری آن باشد که البته حالا با برکناری «سم آلتمن»، مدیرعامل سابق OpenAI، این سمت را به‌طور موقت بر عهده گرفته است. در این مطلب می‌خواهیم شما را با 6 حقیقت جذاب درباره موراتی آشنا کنیم."
        ],
        [
            "title" => "«سم آلتمن» از مدیرعاملی OpenAI کنار گذاشته شد",
            "image" => "https://static.digiato.com/digiato/2023/04/openai_sam_altman_screenshot_video-910x600.jpg",
            "content" => "درحالی هیئت‌مدیره تصمیم به اخراج سم آلتمن گرفته است که چند روز پیش شاهد برگزاری اولین کنفرانس توسعه‌دهندگان OpenAI بودیم. همچنین آلتمن به‌دنبال جذب سرمایه برای ادامه کار OpenAI بود و می‌خواست با سرمایه‌گذاری مایکروسافت هوش مصنوعی جامع (AGI) بسازد؛ بنابراین اخراج آلتمن از سمت مدیرعاملی کمی عجیب به‌نظر می‌رسد."
        ]
    ];
    for ($start = 0; $start < count($blog); $start += 1) {
        echo '<div class="m-10 border-4 border-sky-300">';
            echo '<div class="p-2">';
                echo '<div class="text-center font-bold text-lg">';
                    echo "<span>{$blog[$start]['title']}</span>";
                echo '</div>';
                echo '<div class="mt-4 mb-2">';
                    echo '<img src="'. $blog[$start]['image'] .'" alt="image-thumbnail" />';
                echo '</div>';
                echo '<div class="text-justify">';
                    echo "<p>{$blog[$start]['content']}</p>";
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
    ?>
</body>

</html>