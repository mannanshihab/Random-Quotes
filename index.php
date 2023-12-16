<?php
    $qoutes = [
        [
            'author' => '✪ Lao Tzu ✪ ',
            'text' => 'The journey of a thousand miles begins with one step.',
            'image' => 'image/confused.png'
        ],
        [
            'author' => '✪ George Eliot ✪',
            'text' => 'It is never to late to be what you might have been',
            'image' => 'image/love.png'
        ],
        [
            'author' => '✪ Pablo Picasso ✪',
            'text' => 'Action is the foundational key to all success.',
            'image' => 'image/confused.png'
        ],
        [
            'author' => '✪ John Muir ✪',
            'text' => 'The Power of imagination makes us infinite.',
            'image' => 'image/love.png'
        ],
        [
            'author' => '✪ Napoleon Hill ✪',
            'text' => "Don't wait. The time will never be just right.",
            'image' => 'image/flame.png'
        ],
        [
            'author' => "✪ Michael Lynberg's ✪",
            'text' => "Make each day your masterpiece..",
            'image' => 'image/love.png'
        ],
        [
            'author' => "✪ Elizabeth Barrett Browning ✪",
            'text' => "Light tomorrow with today.",
            'image' => 'image/flame.png'
        ],
        [
            'author' => "✪ Rasel Ahmed ✪",
            'text' => "কানাডাতে শীত কেমন ভাই ?",
            'image' => 'image/haha.png'
        ],
        
    ];

    $qoute = $qoutes[rand(0, count($qoutes) - 1)];

    $Q_Author = $qoute['author'];
    $Q_Text   = $qoute['text'];
    $Q_image   = $qoute['image'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quotes</title>
</head>
<body>
    <div align="center">
        <blockquote>
            <h2>&ldquo;<?php echo "$Q_Text"; ?>&rdquo;</h2>
            <p><?php echo "$Q_Author"; ?></p>
            <img src="<?=  $Q_image; ?>" alt="<?=  $Q_image; ?>">
        </blockquote>
    </div>
</body>
</html>