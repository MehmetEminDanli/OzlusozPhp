<?php
/*
Plugin Name: OzluSozYaz
Description: Yazının üstüne 10 özlü söz içinden 1 tanesini rastgele yazar.
*/

add_filter('the_content', 'OzluSozYaz');

function OzluSozYaz($content)
{
    $rand = rand(1, 24);

    $soz[1] = "Bir insanın karakteri, başkalarının nezdinde değil, yalnız kendisi için de önemlidir. - Eleanor Roosevelt";
    $soz[2] = "Zorlu zamanlarda insanlar karakterlerini ortaya koyarlar. - Charlie Chaplin";
    $soz[3] = "Herhangi bir şeyi başarmak için önce hayal etmelisiniz. - Muhammad Ali";
    $soz[4] = "Bir insanın en büyük başarısı, düşündüğü ve inandığı şeyi yapabilmesidir. - Napoleon Hill";
    $soz[4] = "Başarı, düşmeyi engellemek değil, her defasında kalkıp tekrar denemektir. - Vince Lombardi";
    $soz[5] = "Kendinizi bir şey sanmayın, ama kendinize hiçbir şeyin mümkün olmadığını da söylemeyin. - Paulo Coelho";
    $soz[6] = "Yarınlar, dünlerin bugün olduğu yerde doğar. - Paulo Coelho";
    $soz[7] = "Kendi başarını kendin yarat. - Dalai Lama";
    $soz[8] = "Bir insanın yüzüne bakarak ne kadar zengin olduğunu söylemek mümkün değildir. - Ludwig van Beethoven";
    $soz[9] = "Başkalarına hizmet etmek için var olduğumuzu unutmayın. - Albert Einstein";
    $soz[10] = "Sonsuz bir çabayla büyük şeyler başarabilirsiniz. - Sir Winston Churchill";
    $soz[11] = "Bir insanın güçlü olmasının anlamı, kendisine güvenmektir. - Thomas Carlyle";
    $soz[12] = "Herkes bir şeyi değiştiremez, ama herkes bir şeyi yapabilir. - John F. Kennedy";
    $soz[13] = "Bir insanın en büyük korkusu, hayatı boyunca hiçbir şey başaramamış olmasıdır. - Vince Lombardi";
    $soz[14] = "Başarı, en yüksek hedeflerinize ulaşmak değil, hedeflerinizin peşinde koşmakla ilgilidir. - Zig Ziglar";
    $soz[15] = "Dürüst olmak her zaman en iyisidir, çünkü yalnızca dürüstlük insanı özgür kılar. - Mahatma Gandhi";
    $soz[16] = "Başarının sırrı, azim ve istikrarlı çalışmaktır. - Hikmet Tanyu";
    $soz[17] = "Geçmişiniz sizi yönlendirir, ama geleceğiniz sizin yarattığınızdır. - Zig Ziglar";
    $soz[18] = "Hiçbir şey imkansız değildir, çünkü kelime kendisi \"imkansız\" bile olası olanın içinde yer alır. - Audrey Hepburn";
    $soz[19] = "Bir insanın başarısı, kendisini aşabilmesiyle ölçülür. - Booker T. Washington";
    $soz[20] = "Sadece hayallerinizin peşinden koşmayın, aynı zamanda onları gerçekleştirmek için çalışın. - Colin Powell";
    $soz[21] = "Bir hedefi gerçekleştirmek için önce o hedefi hayal etmek gerekir. - Zig Ziglar";
    $soz[22] = "İşlerinizi yaparken tutkuyla çalışın, çünkü tutku, işinizi zevkli hale getirir. - Steve Jobs";
    $soz[23] = "Hayatta başarılı olmak için, her gün bir adım atmanız yeterlidir. - Mark Twain";
    $soz[24] = "Hayat, deneyimleyebileceğimiz bir maceradır, bu nedenle her anın tadını çıkarın. - Paulo Coelho";

    return $content . "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" . $soz[$rand];
}

?>