!function(){var t={init:function(){this.form=$("#billing-form"),this.submitButton=this.form.find("button[type=submit]"),this.form.find(".payment-errors").hide();var t=$('meta[name="publishable-key"]').attr("content");Stripe.setPublishableKey(t),this.bindEvents()},bindEvents:function(){this.form.on("submit",$.proxy(this.sendToken,this))},sendToken:function(t){this.submitButton.hide(),this.form.find(".progress").show(),Stripe.createToken(this.form,$.proxy(this.stripeResponseHandler,this)),t.preventDefault()},stripeResponseHandler:function(t,i){return i.error?(this.form.find(".payment-errors").show().text(i.error.message),this.form.find(".progress").hide(),this.submitButton.show()):($("<input>",{type:"hidden",name:"token",value:i.id}).appendTo(this.form),void this.form[0].submit())}};t.init()}();