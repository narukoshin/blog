<!-- {"title":"Pitch shifting", "description":"Pitch shifting is a powerful tool in music production that allows you to change the pitch of an audio signal...", "image_url":"https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/pitch_shifting.jpg?raw=true"} -->
<img src="https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/pitch_shifting.jpg?raw=true" /><br><br>

# 🎚️Pitch shifting

Before we start talking about pitch shifting, let's first see what that is.

## 1. What is pitch shifting?

Pitch shifting is a powerful tool in music production that allows you to change the pitch of an audio signal without altering its duration. Whether you're creating harmonies, correcting pitch, or crafting unique soundscapes, pitch shifting opens up a world of creative possibilities. In other words, you can change guitar tuning without turning guitar tuning pegs. Wow, magic! 🧙‍♂️

Because this is a topic about guitars, we will talk about how you can use pitch shifting to alter the pitch of your guitar signals without changing their tempo, helping create harmonies, dive into different tunings, or explore unique soundscapes.

## 2. Reference frequency

A reference frequency is a standard pitch used as a basis for tuning musical instruments. The most common reference frequency is A4, which is set at 440 Hz. This means that note A above middle C vibrates at 440 cycles per second. By using this standard, musicians can ensure that their instruments are in tune with each other. Reference frequencies are crucial for maintaining harmony and consistency in musical performances and recordings, allowing musicians from different backgrounds and with different instruments to play together seamlessly.

Most tuning systems allow you to adjust the reference frequency to suit different tuning standards or preferences. For example E Standard: 444 Hz - Some musicians prefer tuning slightly sharper than the traditional 440 Hz for a brighter sound.

## 3. How to pitch shift

If you want to change the pitch of your guitar, you can use pitch-shifting pedals or plugins. In most DAWs, there are already built-in pitch-shifting plugins. 

In the picture above, you can see how the pitch-shifting pedal looks. One of the most useful features of this pedal is the ability to set a specific pitch and with just one press of a button, you can enable the pitch shift instantly. This functionality is incredibly handy for live performances, allowing you to switch tunings or create harmonies on the fly without interrupting your playing.

<img alt="Digitech Whammy Ricochet Pitch Shift Harmonizer effect pedal" src="https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/pitch-shifting-pedal.png?raw=true">

<sub>Figure 1: Digitech Whammy Ricochet Pitch Shift Harmonizer effect pedal</sub>

Guitar pedals are nice and easy to use (and also cost a lot), but this time we will focus on digital stuff. 🐱

<img alt="Pitchproof Harmonizer|Pitch shifter" src="https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/pitchproof-plugin.png?raw=true">

<sub>Figure 2: Pitchproof Harmonizer|Pitch shifter</sub>

There you can see a VST plugin I'm using for guitar pitch shifting. I'm still experimenting with different plugins and finding the one that works the best. Also, worth mentioning that this plugin is free to use, you can download it <a href="https://aegeanmusic.com/pitchproof-specs">here</a>.

In this plugin, you need to focus only on the blend knob and the pitch. Detune and key are for harmonies which is another topic.

> 💁 Blend knob should be on the wet, which means that only a pitch-shifted signal will be returned.

## 4. Pitch shifting basics

Now that you know what pitch shifting is and how to do it, you need to know some basics. I won't dive into deep music theory, but it's important to know that there are semitones and whole-tones (2 semitones).

If your guitar is currently tuned to E Standard tuning, when you pitch shift just by 1 semitone, it will go one note lower, becoming Eb Standard. When you go whole-tone, it will be D Standard tuning.

To better understand, I created a little cheat sheet for standard and drop tunings.

| Base Tuning | Eb Standard | D Standard | Db Standard | C Standard | B Standard | Bb Standard | A Standard | Ab Standard | G Standard | F♯ Standard | F Standard | E (Octave Lower) |
|--------------------------|-------------|------------|-------------|------------|------------|-------------|------------|-------------|------------|-------------|------------|-------------------|
| E Standard               | -1          | -2         | -3          | -4         | -5         | -6          | -7         | -8          | -9         | -10         | -11        | -12              |
| Eb Standard              | N/A         | -1         | -2          | -3         | -4         | -5          | -6         | -7          | -8         | -9          | -10        | -11              |
| D Standard               | N/A         | N/A        | -1          | -2         | -3         | -4          | -5         | -6          | -7         | -8          | -9         | -10              |
| Db Standard              | N/A         | N/A        | N/A         | -1         | -2         | -3          | -4         | -5          | -6         | -7          | -8         | -9               |
| C Standard               | N/A         | N/A        | N/A         | N/A        | -1         | -2          | -3         | -4          | -5         | -6          | -7         | -8               |
| B Standard               | N/A         | N/A        | N/A         | N/A        | N/A        | -1          | -2         | -3          | -4         | -5          | -6         | -7               |
| Bb Standard              | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | -1         | -2          | -3         | -4          | -5         | -6               |
| A Standard               | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | N/A        | -1          | -2         | -3          | -4         | -5               |
| Ab Standard              | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | N/A        | N/A         | -1         | -2          | -3         | -4               |
| G Standard               | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | N/A        | N/A         | N/A        | -1          | -2         | -3               |
| F♯ Standard              | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | N/A        | N/A         | N/A        | N/A         | -1         | -2               |
| F Standard               | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | N/A        | N/A         | N/A        | N/A         | N/A        | -1               |
| E (Octave Lower)         | N/A         | N/A        | N/A         | N/A        | N/A        | N/A         | N/A        | N/A         | N/A        | N/A         | N/A        | N/A              |

<sub>Table 1: Standard tuning pitch shifting cheatsheet.</sub>

| Base Tuning | Drop C# | Drop C | Drop B# | Drop B | Drop A# | Drop A | Drop G# | Drop G | Drop F# | Drop F | Drop E |
|-------------|---------|--------|---------|--------|---------|--------|---------|--------|---------|--------|--------|
| Drop D      | -1      | -2     | -3      | -4     | -5      | -6     | -7      | -8     | -10     | -12    | -14    |
| Drop C#     | N/A     | -1     | -2      | -3     | -4      | -5     | -6      | -7     | -9      | -11    | -13    |
| Drop C      | N/A     | N/A    | -1      | -2     | -3      | -4     | -5      | -6     | -8      | -10    | -12    |
| Drop B#     | N/A     | N/A    | N/A     | -1     | -2      | -3     | -4      | -5     | -7      | -9     | -11    |
| Drop B      | N/A     | N/A    | N/A     | N/A    | -1      | -2     | -3      | -4     | -6      | -8     | -10    |
| Drop A#     | N/A     | N/A    | N/A     | N/A    | N/A     | -1     | -2      | -3     | -5      | -7     | -9     |
| Drop A      | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | -1      | -2     | -4      | -6     | -8     |
| Drop G#     | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | N/A     | -1     | -3      | -5     | -7     |
| Drop G      | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | -2      | -4     | -6     |
| Drop F#     | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | N/A     | -1     | -3     |
| Drop F      | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | N/A     | N/A    | -1     |

<sub>Table 2: Drop tuning pitch shifting cheatsheet.</sub>

I hope that after reading this you have a better understanding of pitch shifting. 

## 5. The juicy part (The Rocksmith)

If you are like me and play Rocksmith, then you’re in luck, because I will reveal a hack on how to alter pitch shifting. Before we start, you need the following things:

* Electric guitar;
* Rocksmith;
* rs_asio installed, <a href="https://github.com/mdias/rs_asio">setup guide there</a>;
* Audio Interface with 2 channels or loopback channel.

I don't know about other DAWs, but in Ableton, you can easily route audio from one channel to another. So, I have a guitar input from channel 1/2 and output it to 3/4 channel, which on my interface is a loopback channel. (I believe, that you can do that in any other DAW, even free ones or similar software that allows routing audio signals between different channels.)

The first step is that you need to take your guitar input and apply pitch shifting, and the signal should be sent to another channel; we are doing something similar to what the patch bay does.
\- what the?, Okay, nevermind, just remember, input is 1/2, output is 3/4.

<img alt="Ableton guitar signal routing example" src="https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/ableton-pitchshifting.png?raw=true">

<sub>Figure 3: Ableton guitar signal routing example.</sub>

Yes, I have a tuner before and after pitch shifting because I like to see if my guitar is in tune and if the pitch-shifted signal is in tune. 😼

When you finish this, in the second step you need to edit the RS_ASIO configuration file and modify the input source.

Here is an example of how my RS_ASIO config looks.

<img alt="RSAsio config example" src="https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/rsasio_config.png?raw=true">

<sub>Figure 4: RSAsio config example.</sub>

There's a little example about RSAsio channels:

| Channel | Input source |
|---------|--------------|
| 0 | 1/2  (stereo) |
| 1 | 1 (mono) |
| 2 | 3/4 (stereo) |
| 3 | 3 (mono) |

<sub> Table 3: RSAsio input channel examples.</sub>

Today, I've already tested, and pitch-shifting in Rocksmith works kinda fine.

<img alt="Tuner before/after pitch-shifting" src="https://github.com/narukoshin/blog/blob/assets/articles/pitch-shifting/ableton-tuners.png?raw=true">

<sub>Figure 5: Tuner before/after pitch-shifting</sub>

Another great experiment would be applying autotune on pitch-shifted signals for better accuracy. I hope this small hack will help you because I have seen many times people struggling with guitar tunings while playing Rocksmith, even I broke 2 strings while changing guitar tunings (yes, I know that's bad, ion have many guitars 😿)

## 6. Conclusion

I hope after reading this article you have a better understanding about what is pitch shifting and how to use it. 

As a music producer and someone who is learning to play musical instruments, I like to experiment with hardware and other equipment. I think I can call it an addiction because since childhood, I've loved to disassemble things and learn how they work (nothing has changed, by the way).

If you like the content I'm writing and want to see more in the future, you can support me in any way you want. I believe that music education and sharing knowledge should be accessible to everyone. It's never too late to start; it's better to start late than never.

You can read about my music experience in article overviews, where you will see how I started doing music and that I don't have much knowledge of music theory but I'm moving forward and trying to learn the topics I'm interested in to be a better at playing guitar, making music, etc.

Enough writing, if you have a GitHub account, you can share your feedback or suggest a new topic for writing in the <a href="https://github.com/narukoshin/blog/issues">Issues</a> page or you can contact me at inquiries@narukoshin.me.

<img src="https://z-p3-scontent.frix8-1.fna.fbcdn.net/v/t39.30808-6/465168805_3836702293275892_2818084641482412552_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=aa7b47&_nc_ohc=X5gd8qZdBHUQ7kNvgFW-xeF&_nc_zt=23&_nc_ht=z-p3-scontent.frix8-1.fna&_nc_gid=AfdXeXYgCjz-HD6Anb7eOkZ&oh=00_AYCIoPX2_3ptIzQbfZvmZ0hUjgoQCvveq0s0FIVMwjTPPA&oe=673317B1">
<sub>Figure 6: Stop thinking, start doing.</sub>

---
ENKO @ 2024
