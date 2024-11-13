<div>
    <a target="_blank" href="https://twitter.com/enkosan_p"><img src="https://media4.giphy.com/media/iFUiSYMNPvIJZDpMKN/giphy.gif?cid=ecf05e471v5jn6vuhczu1tflu2wm7qt11atwybfwcgaqxz38&rid=giphy.gif&ct=s" align="middle" width="120"></a>
    <a target="_blank" href="https://instagram.com/enko.san"><img src="https://media1.giphy.com/media/Wu9Graz2W46frtHFKc/giphy.gif?cid=ecf05e47h46mbuhq40rgevni5rbxgadpw5icrr71vr9nu8d4&rid=giphy.gif&ct=s" align="middle" width="120"></a>
</div>

# 🏹 Ableton push as the mixer

In this topic I will share how I'm using my Ableton push 2 as a mixer that I'm using daily for easier different sound management and processing, for example boosting frequencies to listen the music.


## 💁 1. What is Ableton Push?

I believe that not everyone knows what Ableton Push is, so at the beginning, I will explain what it is.

The Ableton Push 2 is a DAW controller device with 64 touch-sensitive pads that let you play notes, chords, and beats. It has a bright, high-resolution display that shows waveforms and mixer settings, making it easy to adjust levels and effects directly on the device.

<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.etsystatic.com%2F30371441%2Fr%2Fil%2F066f75%2F4639018357%2Fil_fullxfull.4639018357_rtxj.jpg&f=1&nofb=1&ipt=aa726968ff7462e3a2c4b3cf8bbb3ffe863000aafd1730219d745a51222faefb&ipo=images" width="500">

<sub>Figure 1: Ableton Push 2 in the wooden stand.</sub>

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