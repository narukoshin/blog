<!-- {"title":"Ableton and OBS Workflow", "description":"This article shows how to easily record sound from Ableton in OBS and use the new MiniFuse update to improve your audio setup.", "image_url":"https://github.com/user-attachments/assets/642cd09d-6585-4b64-93dd-a6338e419d3a"} -->

<img src="https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457666151-642cd09d-6585-4b64-93dd-a6338e419d3a.png?raw=true" width="100%" height="200">


It’s been a while since my last article, so I’ve decided to cover two topics in this one. I felt that focusing on just one would be too short, as there isn’t much to explain individually.

> Arturia MiniFuse Update and Virtual I/O

There’s already an article out there about using Ableton Push as a mixer, but I want to talk about something more recent. A few months ago, Arturia released a new update for the MiniFuse audio interface, which significantly improves its virtual input/output capabilities.

Previously, the interface only allowed you to use channels 1/2, while channels 3/4 were reserved for loopback. So technically, there were four channels, but only two could be used freely. With this new update, I now have access to all eight channels. This is a big improvement, as it means I no longer need to rely on Voicemeeter, which tends to introduce extra latency.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457665184-475b3fd9-f469-4d12-aaed-15633f597321.png?raw=true)

In my opinion, Arturia did a great job on this. The new interface is improved, and there are additional channels to work with.

To enable them in the DAW, go to the Audio Settings, click on both the input and output configuration, and select all channels.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457665304-4763e576-982f-4752-ac05-5e2aecdf29c8.png?raw=true)

Now, you no longer need to use VoiceMeeter or any other software to route audio signals.

> Recording Ableton (or any DAW) with OBS

The second topic is about how to record audio from Ableton (or any DAW) using OBS. If you're using an audio interface, you’ve probably noticed that it sends audio directly to the interface, bypassing the system audio.

While there is a workaround where you can change your audio settings to route audio through the PC, it’s not ideal to switch back and forth every time you want to record. In my experience, it's better to find a setup that allows you to record clean DAW audio in OBS without having to constantly change the settings.

To do so, I will use a VST plugin that will share audio between DAW and OBS.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457612021-5ab67c26-298f-4f9e-b16e-df8c00ae2457.png?raw=true)

SonoBus is a free, high-quality VST plugin designed for real-time audio streaming over the internet or a local network. In this case, it's being used to route audio directly from your DAW into OBS with minimal latency and without the need for virtual audio cables. Its simple interface and reliable performance make it a great tool for streaming, collaboration, or audio routing setups.

Before you begin setting things up, make sure you have everything you need installed: your DAW of choice, OBS, and SonoBus. It's worth mentioning that OBS only loads VST plugins from specific folders, so be sure to install or copy the plugin into the correct directory. You can find the list of supported folders in the OBS wiki: https://obsproject.com/kb/vst-2-x-plugin-filter.

---
### 🐈 Setting up

First, create a new scene in OBS, then add a Window Capture source to capture your DAW window. After that, make sure to enable audio capturing so that OBS can receive the audio signal from SonoBus.

It should look like this:

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457612542-992aa79a-710d-486b-91bf-c5680caec3d4.png?raw=true)

Note that if audio is playing in your DAW, OBS won’t capture it, as the audio isn’t routed through the system output. This is where SonoBus plays a crucial role—it transfers the audio signal directly from your DAW to OBS.


To connect your DAW to OBS, open your DAW of choice and place SonoBus on the master bus or any other channel you want to send audio from.

It should look like this:

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457661730-d74587e4-af7f-452a-bff3-c37d5cd0cb38.png?raw=true)

I placed a limiter before SonoBus to prevent sending clipped audio.

There are two ways to connect: via a local network or through the cloud. Cloud connection lets you link devices across different networks, which is useful when streaming with others. However, because audio signals are transmitted through the cloud, some latency is possible, and this method won’t work without an internet connection.

To connect audio using the cloud, in the Sonobus interface, click on the "Connect" button.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457662378-5e82f04d-0873-4e08-b352-9c7295e03a09.png?raw=true)

Create a new private group to ensure that others can’t connect and hear your audio. It’s best to set a password for added security. You can choose any display name you like, but the group name must be the same in both OBS and your DAW.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457662430-f15e47e6-c432-4931-930e-a5cbd0d2407a.png?raw=true)

When you are ready, click on the "Connect to Group" button and repeat the same in OBS. If you want to use the local network instead, click on the three dots on the right side of the interface.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457662719-e129512c-780d-49b9-9d75-242a15059e11.png?raw=true)

Next, click on "Connect to Raw Address...". You’ll see a local IP address with a port number. Copy this and paste it into the "Host" input field, then click "Direct Connect". Make sure the IP address starts with "192.168...". If it starts with something different, for example "169.254", you’ll need to disable the internet or the adapter while setting this up.

At this point, the DAW side is set up. To get the audio in the OBS, we need to repeat the same steps on OBS.

Right-click on the "Window Capture" and select "Filters".

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457663584-8e5c5676-19aa-4404-bd79-958a2bb4c1b8.png?raw=true)

Under "Audio Filters", click on the plus icon and select "VST 2.x Plug-in". When you create a filter, there should be SonoBus in the select menu.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457663786-7a54a648-359f-4d44-986f-d68cb068ec4a.png?raw=true)

When you select Sonobus, a new button will appear below it. Click on the "Open Plug-in Interface" and repeat the steps we did in the DAW.

If you are connecting using the cloud, you can include "OBS" in the display name so you can recognize which is which.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457664830-16ec5258-c282-4313-9d94-41ed8e0a9f61.png?raw=true)

If you are connecting via a local network, repeat the steps mentioned before, but as the "Host", specify the IP and port from the DAW.

If everything is done correctly, you should receive audio from the DAW inside OBS.

![Image](https://github.com/narukoshin/blog/blob/assets/articles/ableton-and-obs-workflow/457664979-ef2e5260-5a95-41a2-8dcc-d4b4ff703188.png?raw=true)


