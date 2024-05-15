const instagram = () => {
	const instances = document.querySelectorAll(".section--social-feed");

	Array.from(instances).forEach((instance) => {
		if (instance !== null) {
			const accessToken = "IGQWRPZAFpIb3Q5c2ZAINWk1MFJZALW9MT3hyeTRHYmF5bldyZAk9KZAF92QUVTQkpUS3pEWjlGRi1OUU50LWNnRUwzdmJBSFo5R3FEVHE0dFRYTWF2c0JEYTNnZAlZAuR3lXZA2lyd1hBVXpqVGhUeVB3ODUzdE0zakw2RDgZD";
			const container = instance.querySelector(".instagram-feed");

			function limitCaption(caption) {
				if (caption.length > 200) {
					return caption.substring(0, 200) + "...";
				} else {
					return caption;
				}
			}

			fetch(`https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,permalink&access_token=${accessToken}`)
				.then((response) => {
					if (!response.ok) {
						throw new Error("Failed to fetch Instagram posts");
					}
					return response.json();
				})
				.then((data) => {
					data.data.forEach((post) => {
						const postElement = document.createElement("div");
						postElement.classList.add("instagram-item");

						const figureElement = document.createElement("div");
						figureElement.classList.add("instagram-item__figure");

						if (post.media_type === "VIDEO") {
							const videoElement = document.createElement("video");
							videoElement.src = post.media_url;
							videoElement.autoplay = false;
							figureElement.appendChild(videoElement);
						} else {
							const imageElement = document.createElement("img");
							imageElement.src = post.media_url;
							imageElement.alt = post.caption || "Instagram Post";
							figureElement.appendChild(imageElement);
						}

						postElement.appendChild(figureElement);

						const captionElement = document.createElement("div");
						captionElement.classList.add("instagram-item__content");
						captionElement.textContent = limitCaption(post.caption || "");

						postElement.appendChild(captionElement);

						container.appendChild(postElement);
					});

					import("tiny-slider/src/tiny-slider").then((root) => {
						const slider = root.tns({
							container,
							items: 1.25,
							gutter: 24,
							loop: false,
							controls: false,
							nav: false,
							center: false,
							mouseDrag: true,
							autoplayButtonOutput: false,
							responsive: {
								768: {
									items: 2.5,
								},
								1240: {
									items: 2.5,
								},
								1600: {
									items: 3.15,
								},
							},
						});
					});
				})
				.catch((error) => console.error("Error fetching Instagram posts:", error));
		}
	});
};

export { instagram as default };
