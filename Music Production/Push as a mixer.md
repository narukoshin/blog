<!-- {"title":"Ableton Push 2 as a mixer", "description":"In this topic I will share how I'm using my Ableton push 2 as a mixer that I'm using daily for easier different sound management and processing, for example boosting frequencies to listen the music.", "image_url":"https://github.com/narukoshin/blog/blob/assets/articles/push-as-a-mixer/article_header.jpg?raw=true"} -->

<img src="https://github.com/narukoshin/blog/blob/assets/articles/push-as-a-mixer/article_header.jpg?raw=true">

<div>
    <a target="_blank" href="https://twitter.com/enkosan_p"><img src="https://media4.giphy.com/media/iFUiSYMNPvIJZDpMKN/giphy.gif?cid=ecf05e471v5jn6vuhczu1tflu2wm7qt11atwybfwcgaqxz38&rid=giphy.gif&ct=s" align="middle" width="120"></a>
    <a target="_blank" href="https://instagram.com/enko.san"><img src="https://media1.giphy.com/media/Wu9Graz2W46frtHFKc/giphy.gif?cid=ecf05e47h46mbuhq40rgevni5rbxgadpw5icrr71vr9nu8d4&rid=giphy.gif&ct=s" align="middle" width="120"></a>
</div>

# 🏹 Ableton Push 2 as a mixer

In this topic I will share how I'm using my Ableton push 2 as a mixer that I'm using daily for easier different sound management and processing, for example boosting frequencies to listen the music.


## 💁 1. What is Ableton Push 2?

I believe that not everyone knows what Ableton Push is, so at the beginning, I will explain what it is.

The Ableton Push 2 is a DAW controller device with 64 touch-sensitive pads that let you play notes, chords, and beats. It has a bright, high-resolution display that shows waveforms and mixer settings, making it easy to adjust levels and effects directly on the device.

<p align="center">
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.etsystatic.com%2F30371441%2Fr%2Fil%2F066f75%2F4639018357%2Fil_fullxfull.4639018357_rtxj.jpg&f=1&nofb=1&ipt=aa726968ff7462e3a2c4b3cf8bbb3ffe863000aafd1730219d745a51222faefb&ipo=images" width="500"><br>
    <sub>Figure 1: Ableton Push 2 in the wooden stand.</sub>
</p>


<img src="https://media1.tenor.com/m/n9_4v3S3-M0AAAAd/friday-excited.gif" width="150" align=right>

### 1.2. Do you need it?

It is possible that after reading "controller, 64 pads," you might think, "Wow, I need it right now". But hey, read this article before spending all your money.

Ableton Push 2 is a pretty good and unique device that can help you in music production or even mixing. But you can't make gold from stone, right? Like any other good and unique device, it has some limitations. For example, in simple words, it's useless for arrangement. If you are an Ableton user, then you know that there are Session and Arrangement views. The Push is made for the Session view, and this is where it works best.

Cats and dogs are human best friends, but they are not the same.

I will not make a full Ableton Push review; this could be an idea for another topic, where I could explain the main features of the Push and which ones I use the most.

## 🧙‍♂️ 2. How it started?

I didn't use Push 2 for a while. I took it out when I wanted to experiment with some chords, drum pads, etc.

Now I'm playing electric guitar pretty often, and I found that sometimes it's difficult to quickly switch between different guitar tones, for example, from rock to metal. So I thought about using Push 2 pads, so with a single click, I can easily change between different prepared guitar tones, and it worked nicely.

Initially, my plan was to record my guitar playing with OBS, but soon I realized that I could use Push 2 as my mixer to control all audio, including the guitar, computer sound, and other sounds. The main issue was that my audio interface doesn't have enough I/O channels, only 1/2 and 3/4 (loopback). To successfully route audio from the computer and different applications, I'm using software called Voicemeter, which provides me with some virtual I/O channels I can use.

Unfortunately, not everything is that easy in this world. Even though I'm using ASIO virtual channels, due to routing audio signals from Voicemeter to Ableton and back to Voicemeter before reaching the output, there is around 3-4ms latency. For daily use, that's not critical, but for games where it's important that you hear and see everything without latency, it makes things more difficult and can even make the game unplayable. For example, while playing osu!, it's important that you hear audio with the lowest latency possible; if there's latency, it affects the accuracy.

## 〽️ 3. Pros & Cons

| Pros | Cons |
|------|------|
| Easy to manage sounds with knobs or buttons (Useful for streaming). | There's a latency that possibly can bother. |
| You can apply different effects on channels. | You need a stand for better reachability. |
| You can add multiple input and output channels. | Ableton or VoiceMeeter might crash, especially after sleep/hibernate mode, or the sound might start cracking or sound like there's a demon in your computer. |
| | VoiceMeeter and Ableton need to be open all the time in order to hear anything. If one goes down, everything goes down. |

<sub>Table 1: Pros and Cons</sub>

## 🤷 4. Setup guide

### 4.1. Pre-setup

<img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExdWg1djE5YXN2dmxmejZkbWNscnpmOG9tbmUyc202YTk2YzVlcDNxcyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l3q2K5jinAlChoCLS/200w.webp">

If you are wondering why this section is right after the pros & cons, this isn't a mistake. I want you to know all the 
benefits and surprises that come with it before you start doing what I've done.
As you see, there are quite a lot cons. But can we reduce the cons? Yes.

Actually, I was trying to find a solution to fix the latency issues, and a solution exists. At the moment, 
the signal flow goes like this:

```
Sound Interface => VoiceMeter => Ableton => VoiceMeter => Output
```

As you can see, VoiceMeter does most of the work, and that is the reason for the latency. The only way to reduce the  latency is to use an audio interface with more input and output channels. Unfortunately, my sound interface has only 1/2 and 3/4 (loopback) channels, which limits me to only 2 working stereo channels. This is why I have to use VoiceMeter, because I'm limited to channels and need more virtual channels to route the signals through.

It should look like this:

```
Sound Interface => Ableton => Output
```

If you manage to set your setup like this, then I can congratulate you, because this is the setup where the latency is very minimal and nearly noticable, so you can even play games like osu!. I tried it myself by routing all my audio using 3/4 channel.

### 4.2. The actual setup

1. Installing the Voicemeter. <br>

Before you proceed, you need to install the Voicemeter software with all the drivers it comes with. After the installation, you need to restart your computer. (Setup could be different on mac).

2. Voicemeter configuration <br>

When you successfully installed Voicemeter, you need to configure the output device by clicking on the A1. This will be your main output device. I set it to my Arturia Minifuse audio interface.

Then open Voicemeter settings using the menu or the keyboard shortcut `CTRL + ,`, and under the patch inserts, select the first 2 channels.

<img alt="Voicemeter patch insert configuration" src="https://github.com/narukoshin/blog/blob/assets/articles/push-as-a-mixer/voicemeter_2.png?raw=true">

<sub>Figure 2: Voicemeter patch insert configuration</sub>


Now you can exit the settings and, in the main screen, click on the <b>A1</b> button. There will be your output from the DAW that you will send to your speakers.

<img alt="Voicemeter main screen after configuration" src="https://github.com/narukoshin/blog/blob/assets/articles/push-as-a-mixer/voicemeter_1.png?raw=true">

<sub>Figure 3: Voicemeter main screen after configuration</sub>

3. DAW configuration <br>

The next step is to configure your DAW. The first thing you need to do is select <b>Voicemeeter Potato Insert Virtual ASIO</b> as your audio device and set channels 1/2 as the output channel for the master track. For the PC sound, I'm using the <b>Voicemeter Input</b> device; in Ableton, for me, that is the 11/12 input channel. To see these channels, you need to enable them in the input/output configuration menu. In Ableton, they are disabled by default.

<img src="https://github.com/narukoshin/blog/blob/assets/articles/push-as-a-mixer/ableton_1.png?raw=true">

<sub>Figure 4: Ableton Session View</sub>

In the image above, you can see how my signal chain is configured. I have a guitar input on the 1/2 channel and I'm sending it back to the 3/4 channel. Later, that signal is sent to Rocksmith, while the Ableton Guitar group takes input from the Guitar I/O and sends it to the master after applying the amp.

## 🤔 5. What about other mixers?

Great question (asked by myself, lol). When you hear the word "audio mixer," you probably imagine a big console with lots of knobs and faders for each channel, like the one in the header image of this article.

<img src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExc2Rrb242YjBibmx5M2g1Nmw4YW16OW54dnQ2dmU3Z2g1b2w2ZzZuayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/2hUEYYsJThKUUz9jCJ/giphy.webp" width="150" align=right>

### 5.1. Analog Mixer

The problem with analog mixers is that even though you can connect them to a computer, you only have physical inputs and a single output channel. This means that if you connect drums, a guitar, and a microphone, it will essentially create a snowball effect and throw it right in your face.

<p align=center>
    <br>
    <img src="https://m.media-amazon.com/images/I/81YOpAmzyyL._AC_SX522_.jpg" width="500"><br>
    <sub>Figure 2: An Analog mixer MIZISNR AX-60 / costs around 83$ on Amazon</sub>
</p>

### 5.2. Digital Mixer

The first thing I can say about digital mixers is that they are very expensive. A digital mixer such as the Tascam Model-12 is probably one of the cheapest options, and importantly, you can connect it directly to a DAW. You can use it for live sound, or it will just be a good fit in your home studio. Personally, I would like to try this one.

<p align=center>
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.soundandrecording.de%2Fapp%2Fuploads%2F2020%2F09%2FTascam-Model-12-Aufmacher-Hau.jpg&f=1&nofb=1&ipt=7f3af2687a5550a5553b0024b1db0885165d73d3484232856a2a0f675b5439a8&ipo=images" width="500"><br>
    <sub>Figure 3: A digital mixer Tascam Model-12 / costs around 600$ on Amazon</sub>
</p>

### 5.3. MIDI Mixer

You still want something that is cheaper but does its job? Then a MIDI mixer or controller is your go-to. This kind of controller won't work outside the DAW because it sends signals to the DAW about parameters you change.

<p align=center>
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedias.audiofanzine.com%2Fimages%2Fnormal%2Fkorg-nanokontrol2-3025776.jpg&f=1&nofb=1&ipt=75a755ad1225888ab1ef8807a5042dce24cb8143bd861b5f6855d1a47cde8806&ipo=images" width="500"><br>
    <sub>Figure 4: A MIDI mixer Korg nanoKONTROL2 Slim-Line / costs around 67$ on Amazon</sub>
</p>

### 5.4. Which one is best?

It's difficult to answer the question of which one is best because each of these mixers has its purpose. One is better for stage audio, one requires less space, and another could be a good fit for a music studio.

I believe that you can achieve the result with an analog mixer, it will just be a little bit more difficult because it wasn't made for it. I like the Ableton Push 2 because it doesn't work just like a mixer but also as a DAW controller, where I can do a lot of things that I program on Ableton.

## 📌 6. Conclusion

It doesn't matter what you decide to use. Everything that works for you, is easy to use, and doesn't cause additional latency that can affect your performance is good.

If you are a beginner in the music field, then I would recommend doing research and thinking about what you really need and what will be useful for your daily life.

I hope that this article helped you explore different hardware options and gave you a better understanding of music hardware.

<img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExcnNpY2dsancxemkzYWdrN29lczNudnUzc2swa2g2YzFteHI5MW40aiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/dz4lgXAhlsLXG/200.webp">