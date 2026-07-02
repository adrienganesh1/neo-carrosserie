(function () {
  if (customElements.get('chat-widget')) return;

  class ChatWidget extends HTMLElement {
    connectedCallback() {
      const r = this.attachShadow({ mode: 'open' });
      r.innerHTML = `
        <style>
          :host{ all: initial; }
          *{ box-sizing:border-box; font-family:Manrope, system-ui, sans-serif; }
          .wrap{ position:fixed; right:22px; bottom:24px; z-index:4000; display:flex; flex-direction:column; align-items:flex-end; gap:14px; }
          .launch{ display:flex; align-items:center; gap:11px; border:0; cursor:pointer; color:#fff;
            background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B); padding:13px 20px 13px 22px; border-radius:999px;
            box-shadow:0 12px 30px rgba(229,57,11,.4); font-weight:800; font-size:16px; transition:transform .15s; }
          .launch:hover{ transform:translateY(-2px); }
          .launch .ico{ display:flex; align-items:center; justify-content:center; width:34px; height:34px; border-radius:50%; background:rgba(255,255,255,.2); }
          .dot{ position:absolute; left:-3px; top:-3px; width:14px; height:14px; border-radius:50%; background:#25D366; border:2px solid #fff; }
          .panel{ width:340px; max-width:calc(100vw - 32px); height:520px; max-height:calc(100vh - 120px); background:#fff;
            border-radius:18px; overflow:hidden; box-shadow:0 24px 60px rgba(0,0,0,.28); display:none; flex-direction:column; }
          .panel.open{ display:flex; }
          .hd{ background:radial-gradient(120% 160% at 12% 0%,#332f29 0%,#15140F 60%); color:#fff; padding:20px 20px 22px; }
          .hd .top{ display:flex; align-items:center; justify-content:space-between; }
          .hd .acts{ display:flex; gap:14px; }
          .hd button{ border:0; background:none; color:#fff; cursor:pointer; opacity:.85; padding:0; line-height:0; }
          .hd button:hover{ opacity:1; }
          .who{ display:flex; align-items:center; gap:12px; margin-top:16px; }
          .ava{ width:42px; height:42px; border-radius:50%; background:linear-gradient(135deg,#FBB615,#E5390B); display:flex; align-items:center; justify-content:center; flex:none; }
          .who h3{ margin:0; font-size:18px; font-weight:800; font-family:Archivo, Manrope, sans-serif; }
          .who p{ margin:3px 0 0; font-size:12px; color:#cde9d8; display:flex; align-items:center; gap:6px; }
          .who .on{ width:8px; height:8px; border-radius:50%; background:#25D366; display:inline-block; }
          .body{ flex:1; overflow-y:auto; padding:18px 16px; background:#FBFAF8; display:flex; flex-direction:column; gap:12px; }
          .row{ display:flex; gap:9px; align-items:flex-end; }
          .row.me{ flex-direction:row-reverse; }
          .bava{ width:26px; height:26px; border-radius:50%; background:#e3ded5; flex:none; display:flex; align-items:center; justify-content:center; }
          .bubble{ max-width:78%; padding:11px 14px; border-radius:14px; font-size:14px; line-height:1.5; }
          .bot .bubble{ background:#eef0f3; color:#2d2b26; border-bottom-left-radius:5px; }
          .me .bubble{ background:linear-gradient(120deg,#F26A12,#E5390B); color:#fff; border-bottom-right-radius:5px; }
          .time{ font-size:11px; color:#9a948a; margin:2px 0 0 36px; }
          .ft{ border-top:1px solid #ece7de; background:#fff; padding:12px; display:flex; align-items:center; gap:10px; }
          .ft input{ flex:1; border:0; outline:none; background:#f2efe9; border-radius:999px; padding:12px 16px; font-size:14px; color:#15140F; }
          .ft .send{ border:0; cursor:pointer; width:42px; height:42px; border-radius:50%; flex:none; display:flex; align-items:center; justify-content:center;
            background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B); color:#fff; }
          .pw{ text-align:center; font-size:11px; color:#b3aea4; padding:8px 0 10px; background:#fff; }
        </style>
        <div class="wrap">
          <div class="panel" part="panel">
            <div class="hd">
              <div class="top">
                <div class="ava">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.9-.9L3 20l1.3-3.6A8.4 8.4 0 1 1 21 11.5z"/></svg>
                </div>
                <div class="acts">
                  <button class="close" aria-label="Réduire">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                  </button>
                </div>
              </div>
              <div class="who">
                <div class="ava" style="width:46px;height:46px">
                  <span style="font-family:Archivo;font-weight:900;font-size:18px;color:#fff">N</span>
                </div>
                <div>
                  <h3>Besoin d'aide ?</h3>
                  <p><span class="on"></span> Réponse rapide</p>
                </div>
              </div>
            </div>
            <div class="body"></div>
            <div class="ft">
              <input type="text" placeholder="Écrivez votre message ici" />
              <button class="send" aria-label="Envoyer">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              </button>
            </div>
            <div class="pw">NEO Carrosserie Aigle</div>
          </div>
          <button class="launch" part="launch">
            <span class="ico" style="position:relative">
              <span class="dot"></span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.9-.9L3 20l1.3-3.6A8.4 8.4 0 1 1 21 11.5z"/></svg>
            </span>
            <span class="lbl">Chat</span>
          </button>
        </div>`;

      const panel = r.querySelector('.panel');
      const launch = r.querySelector('.launch');
      const body = r.querySelector('.body');
      const input = r.querySelector('.ft input');
      const send = r.querySelector('.send');
      const now = () => 'à l’instant';

      const greet = [
        "Bonjour et bienvenue chez NEO Carrosserie Aigle ! 👋 Comment pouvons-nous vous aider ?",
        "Posez votre question — devis, rendez-vous, dégâts — un membre de l’équipe vous répond rapidement."
      ];
      let greeted = false;

      function bot(text) {
        const row = document.createElement('div');
        row.className = 'row bot';
        row.innerHTML = '<span class="bava"><svg width="14" height="14" viewBox="0 0 24 24" fill="#8a857c"><path d="M12 2a5 5 0 0 1 5 5v2a5 5 0 0 1-10 0V7a5 5 0 0 1 5-5zM4 20a8 8 0 0 1 16 0v1H4z"/></svg></span><div class="bubble"></div>';
        row.querySelector('.bubble').textContent = text;
        body.appendChild(row);
        body.scrollTop = body.scrollHeight;
      }
      function me(text) {
        const row = document.createElement('div');
        row.className = 'row me';
        row.innerHTML = '<div class="bubble"></div>';
        row.querySelector('.bubble').textContent = text;
        body.appendChild(row);
        body.scrollTop = body.scrollHeight;
      }
      function open() {
        panel.classList.add('open');
        launch.style.display = 'none';
        if (!greeted) { greeted = true; greet.forEach((g, i) => setTimeout(() => bot(g), 250 + i * 600)); }
        setTimeout(() => input.focus(), 200);
      }
      function close() { panel.classList.remove('open'); launch.style.display = 'flex'; }
      function submit() {
        const v = input.value.trim();
        if (!v) return;
        me(v); input.value = '';
        setTimeout(() => bot("Merci pour votre message ! Pour une réponse immédiate, appelez-nous au 021 533 56 56 ou écrivez sur WhatsApp. Sinon, un membre de l’équipe vous répond au plus vite."), 700);
      }

      launch.addEventListener('click', open);
      r.querySelector('.close').addEventListener('click', close);
      send.addEventListener('click', submit);
      input.addEventListener('keydown', (e) => { if (e.key === 'Enter') submit(); });
    }
  }
  customElements.define('chat-widget', ChatWidget);
})();
