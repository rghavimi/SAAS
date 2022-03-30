const app = Vue.createApp({
    data(){
        return {
            productDescription: '',
            adCopies: [],
            response: 'Your ad appears here'
        }
    },
    methods: {
        async createAdCopy(){
            var url = "https://api.openai.com/v1/engines/text-davinci-002/completions";
            var requestBody = JSON.stringify({
                                        "prompt": this.productDescription, 
                                        "temperature": 0.5,
                                        "max_tokens": 60,
                                        "top_p": 1.0,
                                        "frequency_penalty": 0.0,
                                        "presence_penalty": 0.0
                                    });
            
            // Use this for testing and comment out API call to not waste requests
            // this.response = requestBody;

            var rawResponse = await fetch(url, {
                                    method: 'POST',
                                    headers: {
                                    "Authorization": 'Basic '+ btoa(':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'),
                                    "Content-type": "application/json"
                                    },
                                    body: requestBody
                                });
                                // .then(json)
                                // .then(function (data) {
                                //     console.log('Request succeeded with JSON response', data);
                                // })
                                // .catch(function (error) {
                                //     console.log('Request failed', error);
                                // });
            const content =  await rawResponse.json();
            this.response = content["choices"][0]["text"];
        }
    }
})

  app.mount("#app");

// window.createAdCopy = async function(){

// };